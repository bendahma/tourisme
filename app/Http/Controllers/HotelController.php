<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    //
    public function allHotels()
    {
        return view('hotels',[
            'hotels' => Hotel::all()
 
         ]);
    }

    public function index(){
        return view('hotels',[
           'hotels' => Hotel::all()

        ]);
    }
}
