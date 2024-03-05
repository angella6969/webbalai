<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class VisitorCountsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $today = today();
        $startOfWeek = Carbon::now()->startOfWeek();
        $startOfMonth = Carbon::now()->startOfMonth();
        $startOfYear = Carbon::now()->startOfYear();

        $visitorCounts = [
            'dailyVisitorCount' => DB::table('visitors')->whereDate('created_at', $today)->count(),
            'weeklyVisitorCount' => DB::table('visitors')->whereBetween('created_at', [$startOfWeek, $today])->count(),
            'monthlyVisitorCount' => DB::table('visitors')->whereBetween('created_at', [$startOfMonth, $today])->count(),
            'yearlyVisitorCount' => DB::table('visitors')->whereBetween('created_at', [$startOfYear, $today])->count(),
        ];

        // Bagikan jumlah kunjungan ke view
        foreach ($visitorCounts as $key => $value) {
            view()->share($key, $value);
        }

        return $next($request);
    }
}
