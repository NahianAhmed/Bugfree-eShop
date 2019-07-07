<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class UserMiddleWare
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
        if(Session('UserType')=='2' || Session('UserType')=='3'){
            return $next($request);
          }
          else{
              return redirect('/login');
          }

    }
}
