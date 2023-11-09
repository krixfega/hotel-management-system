<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rate;

class RateSeeder extends Seeder
{
    public function run()
    {
        // Seed rate data for rate analysis
        Rate::factory()->count(10)->create();
    }
}
