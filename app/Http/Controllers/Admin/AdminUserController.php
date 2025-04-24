<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\KycUpdateRequest;
use App\Models\BankDetail;
use App\Models\ReferralCode;
use App\Models\User;
use App\Notifications\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Throwable;

class AdminUserController extends Controller
{

    public function imageUpload( $request , $name  )
    {  
        if($request->hasFile($name))
        {
            $file = $request->file($name) ; 

            $fileName = Str::uuid() ."-". $file->getClientOriginalName();

            $path = "images/documents/$name"  ;

            $file->move(public_path($path), $fileName);
   
            $request[$name] = "/$path/" . $fileName;
        }
    }


    public function generateReferral(Request $request , User $user)
    {
        if ( !$user->parent_referral_id ) {

            $parentReferral = ReferralCode::create([
                'code' =>  Str::upper(Str::random(6))
            ]) ;

            $user->update([
                'parent_referral_id' => $parentReferral->id ,
                'email_verified_at' => now() ,
            ]);
        }
        return back()->with(['success' => 'Referral Code generated for user.']);
        
    }


    public function userEmailVerify(User $user)
    {  
        $user->update([
            'email_verified_at' => now()
        ]) ;

        return to_route('admin.all-users')->with('success', 'User Verified.');

    }

    public function allUsersView()
    {

        $users = User::whereNot('is_admin', true)->with(['parentReferral','sharingReferral'])->get();

        $users = $users->map->withParentUser();

        
        return view('pages.admin.all-users-table',compact('users')) ;
    }

    public function createUserView()
    {  
        return view('pages.admin.user-create-form');
    }


    public function createUser(Request $request)
    {
        // Validation rules
        $rules = [
            'name' => ['required'],
            'phone' => ['required', 'numeric'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed'],
        ];

        $request->validate($rules);

        try {
            DB::beginTransaction();

            // Create referral codes

            $sharingReferral = ReferralCode::create([
                'code' =>  Str::upper(Str::random(6))
            ]) ;

            $parentReferral = ReferralCode::create([
                'code' =>  Str::upper(Str::random(6))
            ]) ;
            // Create user
            $user = User::create([
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'parent_referral_id' => $parentReferral->id,
                'sharing_referral_id' => $sharingReferral->id,
                'email_verified_at' => now() ,
            ]);

            DB::commit();

            return to_route('admin.all-users')->with('success', 'User Created.');
            
        } catch (Throwable $e) {

            DB::rollBack();

            return back()->withErrors(['error' => 'Some error occurred: ']);
        }
    }


    public function allUsersKycView($status)
    {  
        if ($status === 'active') {

            $userIds = BankDetail::where('is_kyc_verified',true)->pluck('user_id');
     
        } else {

            $userIds = BankDetail::where('is_kyc_verified',false)->pluck('user_id');

        } 

        $users = User::whereIn('id',$userIds)->get() ;

        return view('pages.admin.kyc.all-users-kyc',compact('users','status')) ;
    }

    public function userKycView(Request $request , User $user)
    {  
        $kycDetails = BankDetail::where('user_id',$user->id)->first() ;

        return view('pages.admin.kyc.user-kyc-details',compact('kycDetails','user')) ;
    }

    public function userKycStatus( BankDetail $kycId , $status)
    {
        if ($status === 'accept') {

            $kycId->update([
                'is_kyc_verified' => true
            ]) ;

            $user = $kycId->user ;

            $user->notify(new WelcomeMail());

            return to_route('admin.all-kyc-view',['status'=>'pending'])->with(['success'=>' Kyc accepted']) ;
     
        } else {

            $kycId->delete();

            return to_route('admin.all-kyc-view',['status'=>'pending'])->with(['success'=>' Kyc rejected']) ;

        }  
    }

    public function userKycUpdateView(Request $request , User $user)
    {
        $kycDetails = BankDetail::where('user_id',$user->id)->first() ;

        return view('pages.admin.kyc.kyc-update-form',compact('kycDetails','user'));

    }

    
    public function userKycUpdate(KycUpdateRequest $request , BankDetail $kycId)
    {  

        $this->imageUpload( $request , "adhaar_card_front") ;
        $this->imageUpload( $request , "adhaar_card_back") ;
        $this->imageUpload( $request , "pan_card") ;
        $this->imageUpload( $request , "selfie") ;

        $this->imageUpload( $request , "nominee_adhaar_card_front") ;
        $this->imageUpload( $request , "nominee_adhaar_card_back") ;
        $this->imageUpload( $request , "nominee_selfie") ;

        $this->imageUpload( $request , "payment_screenshot") ;



        $kycDetails = $request->post() ;


        $kycId->update($kycDetails);

        return to_route('admin.all-kyc-view',['status'=>'active'])->with(['success'=>'Kyc updated successfully']);
        

    }


 
}
