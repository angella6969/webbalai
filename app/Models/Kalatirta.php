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
        
        $query->when($filters['nomor_registrasi'] ?? false, function ($query, $nomor_registrasi) {
            return $query->where('nomor_registrasi', '=', $nomor_registrasi);
        });
    }
    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
    public function kalatirta_pengaduan()
    {
        return $this->hasMany(Kalatirta_pengaduan::class);
    }
}
