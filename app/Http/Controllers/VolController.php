<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vol;

class VolController extends Controller
{
    public function allVols()
    {
        return view('vols',[
            'vols' => Vol::all()
 
         ]);
    }

    public function index(){
        return view('vols',[
           'vols' => Vol::all()

        ]);
    }
}
