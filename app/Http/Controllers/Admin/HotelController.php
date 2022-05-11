<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.hotels.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.hotels.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hotel = new Hotel();
        $hotel->nom_h = $request->nom;
        $hotel->slug = Str::slug($request->nom,'_');
        $hotel->adresse_h= $request->nom;
        
        if($request->hasFile('photo'))
        {   $file = $request->file('photo');
            $extention = $file->getClientOriginalExtension();
            $fileNameToStore = Str::random(20).'_'.time().'.'.$extention;
            $url = $file->storeAs('hotels/'.$hotel->slug,$fileNameToStore,'public');
            $hotel->photo_h = $url;
        }
        $hotel->abonne_id=1;
        $hotel->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Hotel::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Hotel::find($id);
        
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
        $hotel =Hotel::find($id);
        $hotel->nom_h= $request->nom;
        $hotel->slug = Str::slug($request->nom,'_');
        $hotel->adresse_h= $request->adresse;
        if($request->hasFile('photo'))
        {   $file = $request->file('photo');
            $extention = $file->getClientOriginalExtension();
            $fileNameToStore = Str::random(20).'_'.time().'.'.$extention;
            $url = $file->storeAs('hotels/'.$hotel->slug,$fileNameToStore,'public');
            $hotel->photo_h = $url;
        }
        $hotel->abonne_id=1;
        $hotel->save();
        return redirect('admin/hotels')->with('status','hotel ajouté');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel=Hotel::find($id);
        $hotel->delete();
    }
}
