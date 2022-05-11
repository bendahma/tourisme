<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bateau;
use Illuminate\Support\Facades\DB;

class BateauController extends Controller
{
    
   
    public function index(){
        $bateaux = DB::table('bateaux')->get();
        return view('Bateaux',[
           'bateaux' => $bateaux

        ]);
    }
}
