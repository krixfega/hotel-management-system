<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hotel;

class HotelSeeder extends Seeder
{
    public function run()
    {
        // Seed hotel information
        Hotel::factory()->create([
            'name' => 'Sample Hotel',
            'location' => 'City, Country',
            // Add other attributes as needed
        ]);
    }
}

