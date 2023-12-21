<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefJaminanSosial extends Model
{
    use HasFactory;
    protected $table = 'ref_jaminan_sosials';
    protected $fillable = [
        'nama'
    ];
}
