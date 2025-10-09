<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\City;
use App\Models\Guest;
use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home_index(Request $request) {
        $cities = City::withCount('hotels')->get();
        $hotels = Hotel::get();
        $rooms = Room::get();
        $guests = Guest::get();
        $bookings = Booking::get();
    
    
        return view('home.index')-> with([
            'cities' => $cities,
            'hotels' => $hotels,
            'rooms' => $rooms,
            'guests' => $guests,
            'bookings' => $bookings,
        ]);
    }
}
