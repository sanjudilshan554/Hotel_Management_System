<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'address',
        'postel_code',
        'website',
        'contact_number',
        'location',
        'check_in_out_process',
        'email',
        'description',
        'hotel_entry_id',
    ];

    // one hotel has several image
    public function hotelImages(){
        return $this->hasMany(HotelImages::class,'hotel_id', 'id');
    }
}
