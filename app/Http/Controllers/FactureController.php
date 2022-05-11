<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facture;

class FactureController extends Controller
{
    //
    public function allFactures()
    {
        return Facture::all();
    }
}
