<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JaminanSosial extends Model
{
    use HasFactory;
    protected $table = 'jaminan_sosials';
    protected $fillable = [
        'user_id',
        'jamsos_id',
        'jumlah_lk',
        'jumlah_pr',
    ];

    function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    function jamsos()
    {
        return $this->belongsTo(RefJaminanSosial::class, 'jamsos_id');
    }
}
