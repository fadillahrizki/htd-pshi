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

    function fasilitas()
    {
        return $this->hasMany(Fasilitas::class, 'data_umum_id');
    }
    
    function jaminanSosial()
    {
        return $this->hasMany(JaminanSosial::class, 'data_umum_id');
    }
    
    function kondisiTk()
    {
        return $this->hasMany(KondisiTk::class, 'data_umum_id');
    }
    
    function cuti()
    {
        return $this->hasMany(Cuti::class, 'data_umum_id');
    }

    function recCuti()
    {
        return $this->belongsToMany(RefCuti::class, 'cutis', 'data_umum_id','cuti_id');
    }
    
    function recFasilitas()
    {
        return $this->belongsToMany(RefFasilitas::class, 'fasilitas', 'data_umum_id','fasilitas_id');
    }
    
    function recKondisiTk()
    {
        return $this->belongsToMany(RefLulusan::class, 'kondisi_tks', 'data_umum_id','lulusan_id');
    }
    
    function recJamsos()
    {
        return $this->belongsToMany(RefJaminanSosial::class, 'jaminan_sosials', 'data_umum_id','jamsos_id');
    }
}
