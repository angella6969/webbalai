<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kalatirta extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function scopeFilter($query, array $Filters)
    {
        $query->when($Filters['search'] ?? false, function ($query, $search) {
            return  $query->where('name', 'ilike', '%' . strtolower($search) . '%');
        });
    }
    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
}
