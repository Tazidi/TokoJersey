<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        // Periksa apakah pengguna adalah admin
        if (Auth::check() && Auth::user()->usertype === 'admin') {
            return $next($request);
        }

        // Jika bukan admin, arahkan ke halaman home
        return redirect()->route('home');
    }
}
