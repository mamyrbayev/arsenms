<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    public static $validatesAll = [];

    protected $table = 'deals';

    protected $fillable = [
        'sender_id',
        'receiver_id',
        'amount',
        'type'
    ];
}
