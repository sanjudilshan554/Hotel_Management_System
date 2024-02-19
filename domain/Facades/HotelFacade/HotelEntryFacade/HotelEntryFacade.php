<?php 

namespace domain\Facades\HotelFacade\HotelEntryFacade;
use domain\Services\HotelService\HotelEntryService\HotelEntryService;
use Illuminate\Support\Facades\Facade;

class HotelEntryFacade extends Facade{
    
    protected static function getFacadeAccessor(){
        return HotelEntryService::class;
    }

  
}