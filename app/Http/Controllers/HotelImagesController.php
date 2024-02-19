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

       

        if  ($request->hasFile('image')) {
            
            $profile_image = $request->File('image');

            if ($profile_image->isValid()) {

                $name_generation = hexdec(uniqid()); 
                $image_extention = strtolower($profile_image->getClientOriginalExtension());

                if ($image_extention == 'png' || $image_extention == 'jpeg' || $image_extention == 'jpg') {
                    $image_name = $name_generation . '.' . $image_extention;
                    $upload_location = 'image/hotel_images/';
                    $url = $upload_location . $image_name;

                    $profile_image->move(public_path($upload_location), $image_name);

                    $hotel_id = $request->hotel_id;
                    $status= $request->status;

                    $this->image->create([
                        'status' => $status,
                        'url' => 'http://127.0.0.1:8000/' . $url, //not comma 
                        'hotel_id' => $hotel_id,
                    ]);

                    return 1;
                }
                return 2;
            }
            return 3;
        }

        // $response['hotel_image']=HotelImageFacade::store($request->all());
        // return $response;
    }
}
