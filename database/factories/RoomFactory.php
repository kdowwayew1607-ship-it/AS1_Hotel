<?php

namespace Database\Factories;
use App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $hotelId = Hotel::inRandomOrder()->first();

        return [
            'hotel_id' => $hotelId ? $hotelId->id : 1,
            'name' => fake()->name(),
            'type' => fake()->randomElement(['single','double','vip']),
            'price' => fake()->randomFloat(2, 100, 500),
            'is_available' => fake()->boolean()


        ];
    }
}
