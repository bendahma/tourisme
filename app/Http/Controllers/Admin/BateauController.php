<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use App\Models\Abonne;
use App\Models\Bateau;

class BateauController extends Controller
{
    
    public function index()
    {
        $abonne_id = Abonne::where('user_id',auth()->user()->id)->first()->id ;
        $bateaux = Bateau::where('abonne_id',$abonne_id)->paginate(10);
        return view("admin.bateaux.index" , compact('bateaux'));

    }

    
    public function create()
    {
        return view("admin.bateaux.create");
    }

    
    public function store(Request $request)
    {
        $abonne_id = Abonne::where('user_id',auth()->user()->id)->first()->id ;
        
        $image = '' ;

        if($request->hasFile('image')){
            $request->image->store('bateaux', 'public');
            $image = $request->image->hashName() ;
        }
        
        Bateau::create([
            'nom' => $request->nom ,
            'max_perso' => $request->max_perso ,
            'prix' => $request->prix ,
            'date_depart' => $request->date_depart ,
            'date_arrivee' => $request->date_arrivee ,
            'lieu_depart' => $request->lieu_depart ,
            'lieu_arrivee' => $request->lieu_arrivee ,
            'image' => $image ,
            'abonne_id' => $abonne_id ,
        ]);

        return redirect(route(('bateaux.index'))) ;
    }

    
    public function show($id)
    {
        return Bateau::find($id);
    }

   
    public function edit($id)
    {
        $bateau = Bateau::find($id) ;
        return view("admin.bateaux.create", compact('bateau'));
    }

    
    public function update(Request $request,$id)
    {
        $image = '' ;
        $bateau = Bateau::find($id);
        if($request->hasFile('image')){
            $request->image->store('bateaux', 'public');
            $image = $request->image->hashName() ;
            $bateau->update([
                'image' => $image ,
            ]);

        }

        $bateau->update([
            'nom' => $request->nom ,
            'max_perso' => $request->max_perso ,
            'prix' => $request->prix ,
            'date_depart' => $request->date_depart ,
            'date_arrivee' => $request->date_arrivee ,
            'lieu_depart' => $request->lieu_depart ,
            'lieu_arrivee' => $request->lieu_arrivee ,
        ]);

        return redirect(route(('bateaux.index'))) ;

    }

    
    public function destroy($id)
    {
        Bateau::find($id)->delete() ;
        
        return redirect(route(('bateaux.index'))) ;
    }
}
