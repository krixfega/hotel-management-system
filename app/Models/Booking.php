<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'customer_id',
        'room_id',
        'check_in',
        'check_out',
        // Add more fields as needed
    ];

    // Define relationships or additional methods
}
