<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'hotel_id',
    ];
    
    protected $fillable = [
        'name',
        'type',
        'price',
        'is_available',
    ];

    public function hotels(){
        return $this->belongsTo(Hotel::class);
    }

    public function guests(){
        return $this->hasMany(Guest::class);
    }
}
