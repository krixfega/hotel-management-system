<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name', 'date', 'location', 'description',
        // Add more fields as needed
    ];

    // Define relationships or additional methods as needed
}