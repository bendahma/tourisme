<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Abonne;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class AbonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view("admin.abonnes.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.abonnes.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $abonne = new Abonne();
        $abonne->nom = $request->nom;
        $abonne->slug = Str::slug($request->nom,'_');
        $abonne->mot_passe= $request->mot_passe;
        $abonne->email= $request->email;
        $abonne->telephone= $request->telephone;
        $abonne->num_rc= $request->num_rc;
        
        $abonne->save();
        return view("admin.abonnes.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Abonne::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Abonne::find($id);
        
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
        $abonne =Abonne::find($id);
        $abonne->nom= $request->nom;
        $abonne->slug = Str::slug($request->nom,'_');
        $abonne->mot_passe= $request->mot_passe;
        $abonne->email= $request->email;
        $abonne->telephone= $request->telephone;
        $abonne->num_rc= $request->num_rc;
        $abonne->save();
        return redirect('admin/abonnes')->with('status','abonne ajouté');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $abonne=Abonne::find($id);
        $abonne->delete();
    }
}
