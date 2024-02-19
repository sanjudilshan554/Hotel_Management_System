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

    public function find($id){
        return $this->hotel_types->find($id);
    }

    public function update($id, $data){
        $hotelType= $this->hotel_types->find($id);
        return $hotelType->update($data);
    }

    public function count(){
        return $this->hotel_types->count();
    }
}