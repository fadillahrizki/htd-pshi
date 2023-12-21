<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;
    protected $table = 'fasilitas';
    protected $fillable = [
        'data_umum_id',
        'fasilitas_id',
    ];

    function dataUmum()
    {
        return $this->belongsTo(DataUmum::class, 'data_umum_id');
    }

    function fasilitas()
    {
        return $this->belongsTo(RefFasilitas::class, 'fasilitas_id');
    }
}
