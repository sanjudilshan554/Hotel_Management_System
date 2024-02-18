<?php

namespace App\Http\Controllers;

use domain\Facades\HotelTypeFacade\HotelTypeFacade;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HotelTypeController extends Controller
{
    public function index(){
        return Inertia::render("HotelTypes/index");
    }

    public function store(Request $request){
        
        HotelTypeFacade::create($request->all());

    }

    public function all(){
        $response['hotel_types'] = HotelTypeFacade::all();
        return $response;
    }

    public function delete($id){
        HotelTypeFacade::delete($id);
    }

    public function find($id){
        $response['hotel_types']=HotelTypeFacade::find($id);
        return $response;
    }

    public function update(Request $request,$id){
        $response=HotelTypeFacade::update($id,$request->all());
        return $response;
    }

}
