<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;
use Database\Factories\BookingFactory;

class BookingSeeder extends Seeder
{
    public function run()
    {
        // Seed booking data
        BookingFactory::new()->count(15)->create();
    }
}
