<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;
    protected $table = 'fasilitas';
    protected $fillable = [
        'user_id',
        'fasilitas_id',
    ];

    function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    function fasilitas()
    {
        return $this->belongsTo(RefFasilitas::class, 'fasilitas_id');
    }
}
