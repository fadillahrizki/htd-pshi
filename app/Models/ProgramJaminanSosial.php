<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramJaminanSosial extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    protected $casts = [
        'program_jkk' => 'array',
        'program_jht' => 'array',
        'program_jkm' => 'array',
        'program_jp' => 'array',
        'program_jkp' => 'array',
    ];
}
