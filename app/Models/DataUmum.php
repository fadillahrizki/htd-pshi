<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataUmum extends Model
{
    use HasFactory;

    protected $guarded = [];

    function user() {
        return $this->belongsTo(User::class);
    }

    function dataKetenagakerjaan() {
        return $this->hasOne(DataKetenagakerjaan::class);
    }

    function bpjsKesehatan() {
        return $this->hasOne(BpjsKesehatan::class);
    }

    function bpjsKetenagakerjaan() {
        return $this->hasOne(BpjsKetenagakerjaan::class);
    }

    function perangkatHubunganIndustri() {
        return $this->hasOne(PerangkatHubunganIndustri::class);
    }
    
    function pelaksanaanCuti() {
        return $this->hasOne(PelaksanaanCuti::class);
    }

    function kasusPerselisihan() {
        return $this->hasOne(KasusPerselisihan::class);
    }
    
    function fasilitasKeselamatanKesehatanKerja() {
        return $this->hasOne(FasilitasKeselamatanKesehatanKerja::class);
    }

    function fasilitasKesejahteraan() {
        return $this->hasOne(FasilitasKesejahteraan::class);
    }
}
