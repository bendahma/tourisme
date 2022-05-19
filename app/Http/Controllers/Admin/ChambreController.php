<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Chambre;
use App\Models\Hotel;

class ChambreController extends Controller
{
    public function chambreList(Hotel $hotel)
    {
        $chambres = Chambre::where('hotel_id',$hotel->id)->with('hotel')->paginate(10);
        return view('admin.chambres.index',compact(['chambres','hotel']));
    }

    
    public function create(Hotel $hotel)
    {
        return view('admin.chambres.create',compact('hotel'));
    }

    
    public function store(Request $request)
    {
       
        if($request->hasFile('image')){
            $request->image->store('chambres', 'public');
            $image = $request->image->hashName() ;
        }
        Chambre::create([
            'type_chambre' => $request->type_chambre ,
            'nombre_personne'=> $request->nombre_personne ,
            'prix'=> $request->prix ,
            'image' => $image ,
            'disponible'=> true ,
            'hotel_id' => $request->hotel_id ,
        ]);
        return redirect(route('chambreList',$request->hotel_id)) ;
    }

    
    public function show(Chambre $chambre)
    {
        //
    }

    
    public function edit(Chambre $chambre)
    {
        return view('admin.chambres.create',compact('chambre'));

    }

    
    public function update(Request $request, Chambre $chambre)
    {
        if($request->hasFile('image')){
            $request->image->store('chambres', 'public');
            $image = $request->image->hashName() ;
            $chambre->update([
                'image' => $image ,
            ]);
        }
        $chambre->update([
            'type_chambre' => $request->type_chambre ,
            'nombre_personne'=> $request->nombre_personne ,
            'prix'=> $request->prix ,
            'disponible'=> true ,
        ]);
        return redirect(route('chambreList',$chambre->hotel_id)) ;
    }

    
    public function destroy(Chambre $chambre)
    {
        $hotel_id = $chambre->hotel_id ;
        $chambre->delete() ;
        return redirect(route('chambreList',$hotel_id)) ;

    }
}
