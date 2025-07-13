<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        abort(403, 'Unauthorized');
    }
}
// class AdminMiddleware
// {
//     public function handle(Request $request, Closure $next): Response
//     {
//         // Debug - hapus setelah selesai
//         dd([
//             'authenticated' => Auth::check(),
//             'user' => Auth::user(),
//             'user_role' => Auth::user()->role ?? 'no role column',
//             'expected_role' => 'admin',
//             'comparison' => Auth::user()->role === 'admin'
//         ]);

//         if (Auth::check() && Auth::user()->role === 'admin') {
//             return $next($request);
//         }

//         abort(403, 'Unauthorized');
//     }
// }