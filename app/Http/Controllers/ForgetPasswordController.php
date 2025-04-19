<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class ForgetPasswordController extends Controller
{
    public function changePassword(Request $request)
    {
        // Validate the request
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        $user = $request->user();

        // Check if the current password is correct
        if (!Hash::check($request->current_password, $user->password)) {

            return back()->withErrors(['error'=>'Entered wrong current password ']) ;
           
        }

        // Update the password
        $user->forceFill([
            'password' => Hash::make($request->new_password),
        ])->save();

        return redirect()->back()->with(['success'=>'Password changed successfully']);
    }


    public function showForgotPasswordForm()
    {  
        return view('pages.auth.forget-password');

    }
    
    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);
    
        $status = Password::sendResetLink(
            $request->only('email')
        );
    
        return $status === Password::RESET_LINK_SENT
            ? back()->with(['success' => __($status)])
            : back()->withErrors(['email' => __($status)]);

    }

    public function showResetPasswordForm(Request $request)
    {
        $token = $request['token'] ;
        $email = $request['email'] ;
        return view('pages.auth.reset-password', ['token' => $token ,'email' => $email]);
    }


    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'token' => 'required'
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->save();
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }

}
