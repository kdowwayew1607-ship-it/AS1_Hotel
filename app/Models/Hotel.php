<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    



    public function city(){
        return $this->belongsTo(City::class);
    }

    public function room(){
        return $this->hasMany(Room::class);
    }
}
