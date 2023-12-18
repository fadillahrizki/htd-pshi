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

    function data_ketenagakerjaan() {
        return $this->hasOne(DataKetenagakerjaan::class);
    }

    function bpjs_kesehatan() {
        return $this->hasOne(BpjsKesehatan::class);
    }

    function bpjs_ketenagakerjaan() {
        return $this->hasOne(BpjsKetenagakerjaan::class);
    }

    function perangkat_hubungan_industri() {
        return $this->hasOne(PerangkatHubunganIndustri::class);
    }
    
    function pelaksanaan_cuti() {
        return $this->hasOne(PelaksanaanCuti::class);
    }

    function kasus_perselisihan() {
        return $this->hasOne(KasusPerselisihan::class);
    }
    
    function fasilitas_keselamatan_kesehatan_kerja() {
        return $this->hasOne(FasilitasKeselamatanKesehatanKerja::class);
    }

    function fasilitas_kesejahteraan() {
        return $this->hasOne(FasilitasKesejahteraan::class);
    }
}
