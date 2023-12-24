<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'subject',
        'description',
        'status',
        'priority'
    ];

    function replies()
    {
        return $this->hasMany(TicketReply::class);
    }

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
