<?php 

namespace domain\Facades\HotelFacade\HotelImageFacade;
use domain\Services\HotelService\HotelImageService\HotelImageService;
use Illuminate\Support\Facades\Facade;

class HotelImageFacade extends Facade{

    protected static function getFacadeAccessor(){
        return HotelImageService::class;
    }

}