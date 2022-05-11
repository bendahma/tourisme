<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bateau;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BateauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.bateaux.index");

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.bateaux.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bateau = new Bateau();
        $bateau->nom= $request->nom;
        $bateau->slug = Str::slug($request->nom,'_');
        $bateau->max_perso= $request->max_perso;
        $bateau->prix= $request->prix;
        $bateau->depart= $request->depart;
        $bateau->arrivee= $request->arrivee;
        
       
        $bateau->abonne_id=1;
        $bateau->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Bateau::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Bateau::find($id);
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
        $bateau=Bateau::find($id);
        $bateau->nom = $request->nom;
        $bateau->slug = Str::slug($request->nom,'_');
        $bateau->max_perso= $request->max_perso;
        $bateau->prix= $request->prix;
        $bateau->depart= $request->depart;
        $bateau->arrivee= $request->arrivee;
        
       
        $bateau->abonne_id=1;
        $bateau->save();
        return redirect('admin/bateaux')->with('status','bateau ajouté');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bateau=Bateau::find($id);
        $bateau->delete();
    }
}
