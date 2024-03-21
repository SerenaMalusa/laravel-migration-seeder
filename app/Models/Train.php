<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    // use HasFactory;
    protected $fillable = [
        'company',
        'departure_station',
        'arrival_station',
        'departure_time',
        'arrival_time',
        'train_code',
        'coaches',
        'on_time',
        'deleted',
        'restaurant_wagon'
    ];
}
