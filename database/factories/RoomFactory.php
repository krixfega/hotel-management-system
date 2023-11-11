<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    protected $model = Room::class;

    public function definition()
    {
        return [
            'room_number' => $this->faker->unique()->randomNumber(3),
            'type' => $this->faker->randomElement(['Single', 'Double', 'Suite']),
            // Add more fields as needed
        ];
    }
}

