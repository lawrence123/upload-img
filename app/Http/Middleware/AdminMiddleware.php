<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Support\Facades\Auth;
class AdminMiddleware
{
    public function handle($request,Closure $next, $guard=null){
        if (Auth::guard($guard)->check()&& Auth::user()->admin == 'admin'){
            return $next($request);
        }else{
            return redirect(route('home'));
        }
    }
}
