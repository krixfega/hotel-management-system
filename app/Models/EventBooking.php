<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventBooking extends Model
{
    protected $fillable = [
        'customer_id', 'event_id',
        // Add more fields as needed
    ];

    // Define relationships or additional methods as needed
}