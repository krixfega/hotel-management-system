<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'customer_id', 'hotel_id', 'rating', 'comment',
        // Add more fields as needed
    ];

    // Define relationships or additional methods as needed
}
