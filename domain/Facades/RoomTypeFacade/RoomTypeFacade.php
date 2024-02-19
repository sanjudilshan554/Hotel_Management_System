<?php 

namespace domain\Facades\RoomTypeFacade;
use domain\Services\RoomTypeService\RoomTypeService;
use Illuminate\Support\Facades\Facade;

class RoomTypeFacade extends Facade{
    
    protected static function getFacadeAccessor(){
        return RoomTypeService::class;
    }
}