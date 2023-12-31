<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KasusPerselisihan extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    
    function dataUmum() {
        return $this->belongsTo(DataUmum::class);
    }
}
