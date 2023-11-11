<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'hotel_id', 'type', 'price', 'capacity', 'description',
        // more fields 
    ];

    // Define relationships or additional methods 
}