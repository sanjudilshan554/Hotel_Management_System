<?php

namespace domain\Services\HotelService\HotelImageService;
use App\Models\HotelImages;

class HotelImageService{

        protected $hotel_image;

        public function __construct(){
            $this->hotel_image = new HotelImages();
        }

        public function store($data){
            return $this->hotel_image->store($data);
        }

}