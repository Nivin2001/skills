<?php

namespace App\Http\Middleware;

use App\Models\role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $StudentRole=role::where('name','admin')->first();
        if(Auth::user()->role_id==$StudentRole->id)
        {
            return redirect(url('/'));

        }

        return $next($request);
    }
}
