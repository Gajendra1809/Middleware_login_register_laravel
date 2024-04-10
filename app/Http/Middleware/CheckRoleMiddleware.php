<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->session()->has("uid")){
            $role= $request->session()->get("uid")->role;
            if($role=='admin'){
                return $next($request);
            }
        }
        return redirect()->route('dash')->with("error","Only admins are allowed to access this!");
    }
}
