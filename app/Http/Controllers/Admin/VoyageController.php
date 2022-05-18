<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Voyage;
use App\Models\Abonne;

class VoyageController extends Controller
{
    
    public function index()
    {
        $abonne_id = Abonne::where('user_id',auth()->user()->id)->first()->id ;
        $voyages = Voyage::where('abonne_id',$abonne_id)->paginate(10);
        return view("admin.voyages.index",compact('voyages'));

    }

    
    public function create()
    {
        return view("admin.voyages.create");
    }

    
    public function store(Request $request)
    {
        $abonne_id = Abonne::where('user_id',auth()->user()->id)->first()->id ;

        $image = '' ;

        if($request->hasFile('image')){
            $request->image->store('voyages', 'public');
            $image = $request->image->hashName() ;
        }

        Voyage::create([
            'titre' => $request->titre ,
            'destination' => $request->destination ,
            'duree' => $request->duree ,
            'max_perso' => $request->max_perso ,
            'date_depart' => $request->date_depart ,
            'date_arrivee' => $request->date_arrivee ,
            'prix' => $request->prix ,
            'image' => $image,
            'abonne_id' =>  $abonne_id,
        ]);

        return redirect(route('voyages.index'));
    }

   
    public function show($id)
    {
        //    
    }

    
    public function edit(Voyage $voyage)
    {
        return view("admin.voyages.create",compact('voyage'));
    }

    
    public function update(Request $request, Voyage $voyage)
    {
        

        if($request->hasFile('image')){
            $image = '' ;
            $request->image->store('voyages', 'public');
            $image = $request->image->hashName() ;
            $voyage->update([
                'image' => $image ,
            ]);
        }

       $voyage->update([
        'titre' => $request->titre ,
        'destination' => $request->destination ,
        'duree' => $request->duree ,
        'max_perso' => $request->max_perso ,
        'date_depart' => $request->date_depart ,
        'date_arrivee' => $request->date_arrivee ,
        'prix' => $request->prix ,
       ]);
        return redirect(route('voyages.index'));
    }

    
    public function destroy(Voyage $voyage)
    {
        $voyage->delete();
        return redirect(route('voyages.index'));
    }
}
