<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerangkatHubunganIndustri extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    function kondisi_tenaga_kerja() {
        return $this->hasOne(KondisiTenagaKerja::class);
    }

    function dataUmum() {
        return $this->belongsTo(DataUmum::class);
    }
}
