<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BpjsKetenagakerjaan extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    function program_jaminan_sosial() {
        return $this->hasOne(ProgramJaminanSosial::class);
    }
}
