<?php

namespace domain\Services\HotelService\HotelImageService;
use App\Models\HotelImages;

class HotelImageService{

        protected $hotel_image;

        public function __construct(){
            $this->hotel_image = new HotelImages();
        }

        public function store($data){

            if  ($data->hasFile('image')) {
                $profile_image = $data->File('image');
                if ($profile_image->isValid()) {
                    $name_generation = hexdec(uniqid()); 
                    $image_extention = strtolower($profile_image->getClientOriginalExtension());
    
                    if ($image_extention == 'png' || $image_extention == 'jpeg' || $image_extention == 'jpg') {
                        $image_name = $name_generation . '.' . $image_extention;
                        $upload_location = 'image/hotel_images/';
                        $url = $upload_location . $image_name;
    
                        $profile_image->move(public_path($upload_location), $image_name);
    
                        $hotel_id = $data->hotel_id;
                        $status= $data->status;
    
                        return $this->hotel_image->create([
                            'status' => $status,
                            'url' => 'http://127.0.0.1:8000/' . $url, //not comma 
                            'hotel_id' => $hotel_id,
                        ]);
                    }
                }
            }
        }

        public function all($id){
           $data=$this->hotel_image->where('hotel_id',$id)->get();
           return $data;
        }

}
