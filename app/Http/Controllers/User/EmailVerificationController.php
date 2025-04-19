<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Notifications\CustomVerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class EmailVerificationController extends Controller
{
    /**
     * Generate a custom email verification link
     *
     * @param User $user
     * @return string
     */
    public function generateVerificationLink(User $user)
    {
        // Generate a unique, time-limited signed URL
        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            Carbon::now()->addMinutes(60),
            [
                'id' => $user->getKey(),
                'hash' => hash_hmac('sha256', $user->email, $user->getKey()),
                'custom_token' => $this->generateCustomToken($user)
            ]
        );

        return $verificationUrl;
    }

    /**
     * Generate a custom verification token
     *
     * @param User $user
     * @return string
     */
    protected function generateCustomToken(User $user)
    {
        // Create a unique token with additional security
        return Hash::make($user->email . now() . config('app.key'));
    }

    /**
     * Send custom verification notification
     *
     * @param User $user
     */
    public function sendVerificationNotification(User $user)
    {
        // Generate the verification link
        $verificationLink = $this->generateVerificationLink($user);

        // Send custom email notification
        $user->notify(new CustomVerifyEmail($verificationLink));
    }

    /**
     * Verify the email with custom validation
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function verify(Request $request)
    {
        $user = User::findOrFail($request->route('id'));

        // Validate the signed URL
        if (! URL::hasValidSignature($request)) {
            return to_route('login')->withErrors(['message' => 'Invalid verification link']);
        }

        // Additional custom validation
        $providedHash = $request->route('hash');
        $expectedHash = hash_hmac('sha256', $user->email, $user->getKey());

        if (! hash_equals($expectedHash, $providedHash)) {
            return to_route('login')->withErrors(['message' => 'Invalid verification hash']);

        }

        // Mark email as verified
        if (! $user->hasVerifiedEmail()) {
            $user->markEmailAsVerified();
        }
        return to_route('login')->with(['success' => 'Email successfully verified']);
    }
}