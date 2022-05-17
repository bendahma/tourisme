<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use App\Models\Abonne;
use App\Models\Hotel;

class HotelController extends Controller
{
    
    public function index()
    {
        $abonne_id = Abonne::where('user_id',auth()->user()->id)->first()->id ;
        $hotels = Hotel::where('abonne_id',$abonne_id)->paginate(10);
        return view("admin.hotels.index",compact('hotels'));
    }

    public function create()
    {
        return view("admin.hotels.create");
    }

    
    public function store(Request $request)
    {
        $image = '' ;

        $abonne_id = Abonne::where('user_id',auth()->user()->id)->first()->id ;
        if($request->hasFile('image')){
            $request->image->store('hotels', 'public');
            $image = $request->image->hashName() ;
        }

        Hotel::create([
                'nom' => $request->nom ,
                'adresse' => $request->adresse ,
                'image' => $image ,
                'telephone' => $request->telephone ,
                'type' => $request->type ,
                'nombre_chambre' => $request->nombre_chambre ,
                'abonne_id' => $abonne_id ,
        ]) ;

        return redirect(route('hotels.index'));
    }

    
    public function show($id)
    {
        return Hotel::find($id);
    }

    
    public function edit(Hotel $hotel)
    {
        return view("admin.hotels.create",compact('hotel'));
        
    }

    public function update(Request $request, Hotel $hotel)
    {
        $image = '' ;

        if($request->hasFile('image')){
            $request->image->store('hotels', 'public');
            $image = $request->image->hashName() ;
            $hotel->update([
                'image' => $image ,
            ]);
        }

        $hotel->update([
            'nom' => $request->nom ,
            'adresse' => $request->adresse ,
            'image' => $image ,
            'telephone' => $request->telephone ,
            'type' => $request->type ,
            'nombre_chambre' => $request->nombre_chambre ,
        ]);

        return redirect(route('hotels.index'));
    }

   
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return redirect(route('hotels.index'));
    }
}
