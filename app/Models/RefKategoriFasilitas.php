<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefKategoriFasilitas extends Model
{
    use HasFactory;

    protected $table = 'ref_kategori_fasilitas';
    protected $fillable = [
        'nama'
    ];

    function fasilitas()
    {
        return $this->hasMany(RefFasilitas::class, 'kategori_id');
    }
}
