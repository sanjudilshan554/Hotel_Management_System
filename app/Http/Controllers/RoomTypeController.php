<?php

namespace App\Http\Controllers;

use domain\Facades\RoomTypeFacade\RoomTypeFacade;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RoomTypeController extends Controller
{
    public function index(){
        return Inertia::render("RoomTypes/index");
    }

    public function store(Request $request){
        $response['room_types']=RoomTypeFacade::store($request->all());
        return $response;
    }

    public function all(){
        $response['room_types'] = RoomTypeFacade::all();
        return $response;
    }

    public function delete($id){
        RoomTypeFacade::delete($id);
    }

    public function find($id){
        $response['room_types']=RoomTypeFacade::find($id);
        return $response;
    }

    public function update(Request $request,$id){
        $response=RoomTypeFacade::update($id,$request->all());
        return $response;
    }

    public function count(){
        $response=RoomTypeFacade::count();
        return $response;
    }


}
