<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MailBCC
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
        if ($request instanceof \Illuminate\Mail\Message) {
            $request->bcc('waiminmaung@pro1globalhomecenter.com');
        }

        return $next($request);
    }
}
