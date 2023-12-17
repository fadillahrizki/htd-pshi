<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BpjsKetenagakerjaan extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    function programJaminanSosial() {
        return $this->hasOne(ProgramJaminanSosial::class);
    }
}
