<?php

namespace Database\Seeders;
use App\Models\Room;
use App\Models\Guest;
use App\Models\Booking;
use App\Models\Hotel;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            CitySeeder::class,
        ]);


        Hotel::factory(10)->create();
        Room::factory(15)->create();
        Guest::factory(15)->create();
        Booking::factory(15)->create();
    }
}
