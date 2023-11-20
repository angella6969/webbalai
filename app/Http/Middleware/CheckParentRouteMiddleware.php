<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckParentRouteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Misalnya, kita memeriksa apakah pengguna telah mengakses route survey
        if ($request->routeIs('survey')) {
            // Jika iya, izinkan akses ke route berikutnya
            return $next($request);
        }

        // Jika tidak, kembalikan response Unauthorized
        return response('Unauthorized', 401);
    }
}
