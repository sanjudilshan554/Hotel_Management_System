<?php

namespace App\Http\Controllers;

use domain\Facades\HotelFacade\HotelEntryFacade\HotelEntryFacade;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HotelEntryConroller extends Controller
{
    public function index(){
        return Inertia::render("Hotel/index");
    }

    public function store(Request $request){
        $response['hotel_entry']= HotelEntryFacade::store($request->all());
        return $response;
    }

    public function get(){
        $response['hotel_entry']= HotelEntryFacade::get();
        return $response;
    }
}
