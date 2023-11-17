<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Infografis extends Model
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
            return  $query->where('name', 'ilike', '%' . strtolower($search) . '%');
        });

        // $query->when($Filters['status'] ?? false, function ($query, $status) {
        //     return  $query->where('status', 'ilike', '%' . $status . '%');
        // });
        // $query->when($Filters['categories'] ?? false, function ($query, $categories) {
        //     return $query->WhereHas('category', function ($query) use ($categories) {
        //         $query->where('categories.id', $categories);
        //     });
        // });
    }
}
