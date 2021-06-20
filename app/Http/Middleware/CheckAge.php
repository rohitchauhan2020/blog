<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
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
      //  dd($request->get('age'));
       if($request->get('age') < 18){
           return redirect(route("student"));
       }
       return $next($request);
    }
}
