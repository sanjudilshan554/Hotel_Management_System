<?php

namespace App\Http\Controllers;

use domain\Facades\HotelFacade\HotelFacade\HotelFacade;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HotelController extends Controller
{
    public function index(){
        return Inertia::render("HotelTab/index");
    }

    public function store(Request $request){
        $response['hotel']=HotelFacade::store($request->all());
        return $response;
    }
}
