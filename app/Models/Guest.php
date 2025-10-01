<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;


    public function rooms() {
        return $this->belongsTo(Room::class);
    }
    public function bookings() {
        return $this->hasMany(Booking::class);
    }
}
