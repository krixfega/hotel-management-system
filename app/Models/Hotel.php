<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'name', 'location', 'description', 'rating', 'image_url',
        // Add more fields 
    ];

    // Define relationships or additional methods 
}