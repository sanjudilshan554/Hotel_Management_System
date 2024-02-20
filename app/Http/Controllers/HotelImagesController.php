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

        $firstImageid= $this->image->first();
        
        if($firstImageid){
            $response['hotel_image']=HotelImageFacade::store($request);
            return $response;
        }else{
            $status = 1;
            $request->merge(['status'=>$status]);
            $response['hotel_image']=HotelImageFacade::store($request);
            return $response;
        }       
    }

    public function updatePrimary($data){
        
    }

    public function all(){

        $response['hotel_image']=HotelImageFacade::all();
        return $response;
    }

    public function delete($imageId){
  
        $response=HotelImageFacade::delete($imageId);
        return $response;
    }

    public function count(){
        $response=HotelImageFacade::count();
        return $response;
    }
}
