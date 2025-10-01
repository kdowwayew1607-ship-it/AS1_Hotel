<?php

namespace Database\Factories;

use App\Models\Guest;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $roomId = Room::inRandomOrder()->first();
        $guestId = Guest::inRandomOrder()->first();
        return [
            'room_id' => $roomId ? $roomId->id :1,
            'guest_id' => $guestId ? $guestId->id :1,
            'check_in_at' => fake()->dateTimeThisYear(),
            'check_out_at' => fake()->dateTimeThisYear(),
        ];
    }
}
