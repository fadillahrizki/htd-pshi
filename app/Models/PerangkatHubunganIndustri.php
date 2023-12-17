<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerangkatHubunganIndustri extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    function kondisiTenagaKerja() {
        return $this->hasOne(KondisiTenagaKerja::class);
    }
}
