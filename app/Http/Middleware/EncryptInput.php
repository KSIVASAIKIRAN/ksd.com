<?php

namespace App\Http\Middleware;

use Closure;

class EncryptInput
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		
		if(isset($request->aadhaar)){
			 $request->aadhaar = base64_decode($request->aadhaar);

		}


        return $next($request);
    }
}
