<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    use HasFactory;
    protected $table = 'cutis';
    protected $fillable = [
        'data_umum_id',
        'cuti_id',
    ];

    function dataUmum()
    {
        return $this->belongsTo(DataUmum::class, 'data_umum_id');
    }

    function cuti()
    {
        return $this->belongsTo(RefCuti::class, 'cuti_id');
    }
}
