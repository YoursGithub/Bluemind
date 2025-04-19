<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\User\EmailVerificationController;
use App\Models\ReferralCode;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserAuthController extends Controller
{

    public function registerView()
    {
        return view('pages.users.auth.register');
    }

    public function register(Request $request)
    {

        $request->validate([
            'name'=> ['required'],
            'phone'=>['required' ,'numeric'] ,
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed']
        ]);

        if( $request->filled('referral-checkbox') ){

            $code = $request->input('referral-code') ;

            $parentReferral = ReferralCode::where('code',$code)->first() ;

            if( !$parentReferral ){  
                return back()->withErrors(['referral code' => 'The provided referral code do not match our records.']);
            }

            $sharingReferral = ReferralCode::create([
                'code' =>  Str::upper(Str::random(6))
            ]) ;

            $user = User::create([
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'password' =>  Hash::make($request->input('password')) ,
                'parent_referral_id' => $parentReferral->id ,
                'sharing_referral_id' => $sharingReferral->id
            ]);
        }
        else
        {

            $sharingReferral = ReferralCode::create([
                'code' =>  Str::upper(Str::random(6))
            ]) ;
    
            $user = User::create([
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'password' =>  Hash::make($request->input('password')) ,
                'sharing_referral_id' => $sharingReferral->id
            ]);

        }
        
        $emailVerificationController = new EmailVerificationController();
        $emailVerificationController->sendVerificationNotification($user);
      
        return to_route('login')->with(['success'=>'We have sent a verification link to your email']);
    }

    public function loginView()
    {
        return view('pages.users.auth.login');
    }

    public function login(Request $request)
    {
   


        $credentials = $request->validate([
            'email' => ['required', 'email','exists:users,email'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $credentials['email'])->first();

        // Check if email is verified
        if (!$user->hasVerifiedEmail()) {
            return back()->withErrors([
                'email' => 'Please verify your email address first.'
            ]);
        }

        $remember = $request->filled('remember') ?? false ;

        $code = $request->input('referral-code') ;

        if (!Auth::attempt($credentials, $remember)){

            return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
        }

        $codeExists = ReferralCode::where('code' , $code)->first() ;


        if (!$codeExists || Auth::user()->parent_referral_id != $codeExists->id) {
            $this->logout($request);
        
            return back()->withErrors(['referral code' => 'The provided referral code does not match our records.']);
        }

        $request->session()->regenerate();

        return to_route('user.dashboard');
    }


    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('login');
    }

}

