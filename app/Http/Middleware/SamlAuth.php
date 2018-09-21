<?php

namespace App\Http\Middleware;

use Closure;

class SamlAuth
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
        if($this->auth->guest())
		{
			if($request->ajax())
            {
                return response('Unauthorized.', 401);
            }
            else
            {
				return Saml2::login(URL::full());
			}
		}
		
		return $next($request);
    }
}