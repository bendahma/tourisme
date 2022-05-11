<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelType;


class HotelTypeController extends Controller
{
    //
    public function allHotelTypes()
    {
        return HotelType::all();
    }
}
