<?php


namespace Database\Factories;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition()
    {
        return [
            'customer_id' => $this->faker->randomDigit,
            'room_id' => $this->faker->randomDigit,
            'check_in' => $this->faker->dateTimeBetween('now', '+7 days'),
            'check_out' => $this->faker->dateTimeBetween('+8 days', '+14 days'),
            // Add more booking-specific fields as needed
        ];
    }
}



