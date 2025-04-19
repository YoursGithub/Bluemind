<?php

namespace App\Http\Middleware\Custom;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserVerifiedMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next ): Response
    {
        if( Auth::user()->email_verified_at && !Auth::user()->is_admin  )
        {
            return $next($request);
        }

        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('login')->withErrors(['error'=>'Verify Email First or Contact with admin ']);
    }
}
