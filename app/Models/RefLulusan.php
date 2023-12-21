<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefLulusan extends Model
{
    use HasFactory;
    protected $table = 'ref_lulusans';
    protected $fillable = [
        'nama'
    ];
}
