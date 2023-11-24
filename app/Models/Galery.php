<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Galery extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ['id'];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }
    public function scopeFilter($query, array $Filters)
    {
        $query->when($Filters['search'] ?? false, function ($query, $search) {
            return  $query->where('nama', 'LIKE', '%' . strtolower($search) . '%');
        });
    }
}
