<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    public function handle(Request $request, Closure $next) {
        if(Auth::user()->is_admin === 1) {
            return $next($request);
        }
        return redirect()->route("guest.home")->with("error", "You do not have admin access");
    }
}
