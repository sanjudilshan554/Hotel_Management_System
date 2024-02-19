<?php

namespace App\Http\Controllers;

use App\Models\HotelImages;
use domain\Facades\HotelFacade\HotelImageFacade\HotelImageFacade;
use Illuminate\Http\Request;

class HotelImagesController extends Controller
{

    protected $image;

    public function __construct(){
        $this->image = new HotelImages();
    }
    public function store(Request $request){

        $response['hotel_image']=HotelImageFacade::store($request);
        return $response;
    }

    public function all($id){

        $response['hotel_image']=HotelImageFacade::all($id);
        return $response;
    }

    public function delete($hotelId,$imageId,$status){
  
        $response=HotelImageFacade::delete($hotelId,$imageId,$status);
        return $response;
    }

    public function count(){
        $response=HotelImageFacade::count();
        return $response;
    }
}
