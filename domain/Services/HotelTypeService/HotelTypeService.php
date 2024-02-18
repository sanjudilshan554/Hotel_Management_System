<?php

namespace domain\Services\HotelTypeService;
use App\Models\HotelTypes;

class HotelTypeService{

    protected $hotel_types;

    public function __construct(){
        $this->hotel_types = new HotelTypes();
    }

    public function all(){
        return $this->hotel_types->all();
    }

    public function create($data){
        $this->hotel_types->create($data);
    }

    public function delete($id){
        $this->hotel_types->destroy($id);
    }

}