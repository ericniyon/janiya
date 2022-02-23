<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ReferralSystem
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        if ($request->has('ref')) {
            $user = User::where('affiliate_link',$request->get('ref'))->first();
            if (Cookie::has('ref')) {
                if ($request->cookie('ref') != $request->get('ref')) {
                    $user->increment('clicks');
                }
            } else{
                $user->increment('clicks');
            }
            $response->cookie('ref', $user->affiliate_link, 60 * 60 * 24 * 187);
        }
        return $response;
    }
}
