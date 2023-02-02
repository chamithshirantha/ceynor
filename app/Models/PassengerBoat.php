<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassengerBoat extends Model
{
    protected $fillable = [
        'boatname',
        'image',
        'short_description',
        'length',
        'beam',
        'draft',
        'main_hull_beam',
        'fuel',
        'water',
        'seating_capacity',
        'speed',
        'beds',
        'hull_type',
        'fish_hold_capacity',
        'price',
    ]; 
}
