<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKetenagakerjaan extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    function sistem_pembayaran_upah() {
        return $this->hasOne(SistemPembayaranUpah::class);
    }
}
