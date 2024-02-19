<?php 

namespace domain\Facades\HotelFacade\HotelImageFacade;
use Illuminate\Support\Facades\Facade;

class HotelImageFacade extends Facade{

    protected static function getFacadeAccessor(){
        return HotelImageFacade::class;
    }
}