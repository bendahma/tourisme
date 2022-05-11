<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galerie;


class GalerieController extends Controller
{
    //
    public function allGaleries()
    {
        return Galerie::all();
    }
}
