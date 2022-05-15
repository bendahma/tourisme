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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voyages = Voyage::paginate(10);
        return view("admin.voyages.index",compact('voyages'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.voyages.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $abonne_id = Abonne::where('user_id',auth()->user()->id)->first()->id ;

        Voyage::create([
            'titre' => $request->titre ,
            'destination' => $request->destination ,
            'duree' => $request->duree ,
            'max_perso' => $request->max_perso ,
            'date_depart' => $request->date_depart ,
            'date_arrivee' => $request->date_arrivee ,
            'prix' => $request->prix ,
            'abonne_id' =>  $abonne_id,
        ]);

        return redirect(route('voyages.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Voyage::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Voyage $voyage)
    {
        return view("admin.voyages.create",compact('voyage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Vol = new Voyage();
        $Vol->nom_v= $request->nom_v;
        $Vol->slug = Str::slug($request->nom,'_');
        $Vol->adresse_v= $request->adresse_v;
        $Vol->duree= $request->duree;
        $Vol->max_perso= $request->max_perso;
        $Vol->date_depart= $request->date_depart;
        $Vol->date_arrivee= $request->date_arrivee;
        $Vol->prix= $request->prix;
        $Vol->abonne_id=1;
        $Vol->save();
        return redirect('admin/Voyages')->with('status','Voyage ajouté');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voyage $voyage)
    {
        $voyage->delete();
        return redirect(route('voyages.index'));
    }
}
