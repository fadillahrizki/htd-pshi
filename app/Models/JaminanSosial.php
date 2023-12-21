<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JaminanSosial extends Model
{
    use HasFactory;
    protected $table = 'jaminan_sosials';
    protected $fillable = [
        'data_umum_id',
        'jamsos_id',
        'jumlah_lk',
        'jumlah_pr',
    ];

    function dataUmum()
    {
        return $this->belongsTo(DataUmum::class, 'data_umum_id');
    }

    function jamsos()
    {
        return $this->belongsTo(RefJaminanSosial::class, 'jamsos_id');
    }
}
