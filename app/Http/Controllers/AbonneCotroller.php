<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abonne;


class AbonneCotroller extends Controller
{
    //
    public function allAbonnes()
    {
        return view('abonnes',[
            'abonnes' => Abonne::all()
 
         ]);
    }
    
    public function index(){
        return view('abonnes',[
           'abonnes' => Abonne::all()

        ]);
    }
}
