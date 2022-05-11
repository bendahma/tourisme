<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vol;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class VolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.vols.index");

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.vols.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vol = new Vol();
        $vol->nom_compa = $request->nom_compa;
        $vol->slug = Str::slug($request->nom,'_');
        $vol->Date_D= $request->Date_D;
        $vol->Date_A= $request->Date_A;
        $vol->classage_vol= $request->classage_vol;
        
        $vol->abonne_id=1;
        $vol->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Vol::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Vol::find($id);
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
        $vol = new Vol();
        $vol->nom_compa = $request->nom_compa;
        $vol->slug = Str::slug($request->nom,'_');
        $vol->Date_D= $request->Date_D;
        $vol->Date_A= $request->Date_A;
        $vol->classage_vol= $request->classage_vol;
        
        $vol->abonne_id=1;
        $vol->save();
        return redirect('admin/vols')->with('status','vol ajouté');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel=Vol::find($id);
        $hotel->delete();
    }
}
