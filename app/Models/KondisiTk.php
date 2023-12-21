<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KondisiTk extends Model
{
    use HasFactory;
    protected $table = 'kondisi_tks';
    protected $fillable = [
        'data_umum_id',
        'lulusan_id',
        'jumlah_lk',
        'jumlah_pr',
    ];

    function dataUmum()
    {
        return $this->belongsTo(DataUmum::class, 'data_umum_id');
    }

    function lulusan()
    {
        return $this->belongsTo(RefLulusan::class, 'lulusan_id');
    }
}
