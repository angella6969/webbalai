<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kalatirta_pengaduan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kalatirta()
    {
        return $this->belongsTo(Kalatirta::class);
    }
}
