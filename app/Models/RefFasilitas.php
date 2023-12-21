<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefFasilitas extends Model
{
    use HasFactory;

    protected $table = 'ref_fasilitas';
    protected $fillable = [
        'kategori_id',
        'nama',
    ];

    function kategori()
    {
        return $this->belongsTo(RefFasilitas::class, 'kategori_id');
    }
}
