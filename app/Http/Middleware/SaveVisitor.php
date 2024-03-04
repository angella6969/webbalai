<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Carbon;

class SaveVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ipAddress = $request->ip();

        // Cek apakah ada kunjungan sebelumnya dari IP yang sama dalam rentang waktu 2 jam terakhir
        $previousVisit = Visitor::where('ip_address', $ipAddress)
            ->where('created_at', '>=', Carbon::now()->subHours(2))
            ->exists();

        // Jika tidak ada kunjungan sebelumnya, simpan informasi pengunjung ke database
        if (!$previousVisit) {
            Visitor::create([
                'ip_address' => $ipAddress,
                'user_agent' => $request->header('User-Agent'),
            ]);
        }

        return $next($request);
    }
}
