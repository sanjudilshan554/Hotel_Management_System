<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelTypes extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price_range',
        'max_occupancy',
        'extra',
    ];

}
