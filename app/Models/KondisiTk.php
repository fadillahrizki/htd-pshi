<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KondisiTk extends Model
{
    use HasFactory;
    protected $table = 'kondisi_tks';
    protected $fillable = [
        'user_id',
        'lulusan_id',
        'jumlah_lk',
        'jumlah_pr',
    ];

    function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    function lulusan()
    {
        return $this->belongsTo(RefLulusan::class, 'lulusan_id');
    }
}
