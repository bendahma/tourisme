<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voyage;

class VoyageController extends Controller
{
    //
    public function allVoyages()
    {
        return Voyage::all();
    }
    
}
