<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public static function getDailyCount()
    {
        return static::whereDate('visit_time', today())->count();
    }

    public static function getWeeklyCount()
    {
        return static::whereBetween('visit_time', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
    }

    public static function getMonthlyCount()
    {
        return static::whereYear('visit_time', now()->year)->whereMonth('visit_time', now()->month)->count();
    }

    public static function getYearlyCount()
    {
        return static::whereYear('visit_time', now()->year)->count();
    }

    public static function getVisitorCounts()
    {
        return [
            'daily' => static::getDailyCount(),
            'weekly' => static::getWeeklyCount(),
            'monthly' => static::getMonthlyCount(),
            'yearly' => static::getYearlyCount(),
        ];
    }
}
