<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\KycRequest;
use App\Models\BankDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class UserKycController extends Controller
{
   /**
     * Upload an image file for a specific type ('pan' or 'aadhaar').
     *
     * @param UploadedFile $file The uploaded file instance.
     * @param string $type The type of document ('pan' or 'aadhaar').
     * @return string The file path if successful.
     */
    public function imageUpload(UploadedFile $file ,  $type  )
    {  
        $fileName = Str::uuid() ."-". $file->getClientOriginalName();
        $path = "images/documents/$type"  ;
        $file->move(public_path($path), $fileName);

        return "/$path/" . $fileName;
    
    }


    public function kycView()
    { 
        return view('pages.users.kyc-create-form'); 
    }


    public function kyc(KycRequest $request)
    {
       $kycDetails = $request->all() ;
     
        try {
         

            $kycDetails['adhaar_card_front'] = $this->imageUpload($request->file('adhaar_card_front'),'adhaar_card_front') ;
            $kycDetails['adhaar_card_back'] = $this->imageUpload($request->file('adhaar_card_back'),'adhaar_card_back') ;
            $kycDetails['pan_card'] = $this->imageUpload($request->file('pan_card'),'pan_card') ;
            $kycDetails['selfie'] = $this->imageUpload($request->file('selfie'),'selfie') ;


            
            $kycDetails['nominee_adhaar_card_front'] = $this->imageUpload($request->file('nominee_adhaar_card_front'),'nominee_adhaar_card_front') ;
            $kycDetails['nominee_adhaar_card_back'] = $this->imageUpload($request->file('nominee_adhaar_card_back'),'nominee_adhaar_card_back') ;
            $kycDetails['nominee_selfie'] = $this->imageUpload($request->file('nominee_selfie'),'nominee_selfie') ;



            $kycDetails['user_id'] = Auth::user()->id ;

            BankDetail::create($kycDetails) ;


            return to_route('dashboard')->with(['success'=>'Kyc submitted successfully']);

        } catch (\Throwable $th) {

            return back()->withErrors(['error'=>'Some Error Occurred']) ;
        }
    }

}
