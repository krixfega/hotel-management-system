<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Channel;

class ChannelSeeder extends Seeder
{
    public function run()
    {
        // Seed channel data for the channel manager
        Channel::factory()->count(5)->create();
    }
}
