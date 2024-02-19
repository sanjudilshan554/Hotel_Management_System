<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelEntry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'location',
    ];
}
