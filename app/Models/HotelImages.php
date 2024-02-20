<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelImages extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'url',
        'hotel_id',
    ];

    // one image belongs to one hotel
    public function hotel(){
        return $this->belongsTo(Hotel::class, 'id', 'hotel_id');
    }

}
