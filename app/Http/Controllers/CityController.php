<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Hotel;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {        
        $cities = City::withCount('hotels')
        ->get();

        $hotels = Hotel::inRandomOrder()->first();

        // dd($categories);

        return view('home.index')->with([
            'cities' => $cities,
            'hotels' => $hotels,
        ]);
    }
}
