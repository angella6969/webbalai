<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VisitorCountsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        view()->share('dailyVisitorCount', Visitor::getDailyCount());
        view()->share('weeklyVisitorCount', Visitor::getWeeklyCount());
        view()->share('monthlyVisitorCount', Visitor::getMonthlyCount());
        view()->share('yearlyVisitorCount', Visitor::getYearlyCount());

        return $next($request);
    }
}
