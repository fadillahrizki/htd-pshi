<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KondisiTenagaKerja extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    protected $casts = [
        'sd' => 'array',
        'sltp' => 'array',
        'sma' => 'array',
        'd1' => 'array',
        'd2' => 'array',
        'd3' => 'array',
        'd4' => 'array',
        's1' => 'array',
        's2' => 'array',
        's3' => 'array',
        'pkwt' => 'array',
        'pkwtt' => 'array',
        'penyandang_disabilitas' => 'array',
    ];

}
