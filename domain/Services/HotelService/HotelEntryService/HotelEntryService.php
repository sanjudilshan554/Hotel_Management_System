<?php 

namespace domain\Services\HotelService\HotelEntryService;
use App\Models\HotelEntry;

class HotelEntryService{

    private $HotelEntryService;

    public function __construct(){
        $this->HotelEntryService = new HotelEntry();
    }

    public function store($data){
        return $this->HotelEntryService->create($data);
    }
}