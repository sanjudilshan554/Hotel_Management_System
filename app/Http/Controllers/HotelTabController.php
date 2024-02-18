<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HotelTabController extends Controller
{
   
   public function index(){
    return Inertia::render("HotelTab/index");
}
}
