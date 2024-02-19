<?php 

namespace domain\Services\HotelService\HotelService;
use App\Models\Hotel;

class HotelService{

    protected $hotel_service;

    public function __construct(){
        $this->hotel_service = new Hotel();
    }

    public function store($data){
        return $this->hotel_service->create($data);
    }
}