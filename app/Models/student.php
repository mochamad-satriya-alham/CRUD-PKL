<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    protected $fillable = [
        'nama',
        'rombel',
        'nisn',
        'rayon_id',
    ];

    public function rayon()
    {
        return $this->belongsTo(Rayon::class); // Relasi ke tabel rayon
    }
}
