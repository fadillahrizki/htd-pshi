<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefCuti extends Model
{
    use HasFactory;
    protected $table = 'ref_cutis';
    protected $fillable = [
        'nama'
    ];

}
