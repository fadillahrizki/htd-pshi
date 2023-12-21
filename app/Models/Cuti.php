<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    use HasFactory;
    protected $table = 'cutis';
    protected $fillable = [
        'user_id',
        'cuti_id',
    ];

    function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    function cuti()
    {
        return $this->belongsTo(RefCuti::class, 'cuti_id');
    }
}
