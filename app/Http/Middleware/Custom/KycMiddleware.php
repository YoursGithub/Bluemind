<?php

namespace App\Http\Middleware\Custom;

use App\Models\BankDetail;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class KycMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $kycDone = BankDetail::where('user_id',$request->user()->id)->first() ;

        if(!$kycDone)
        {
            return $next($request);
        }

        return new Response("KYC already submitted") ;
    }
}
