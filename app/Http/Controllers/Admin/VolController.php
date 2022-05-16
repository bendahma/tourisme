<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use App\Models\Abonne;
use App\Models\Vol;

class VolController extends Controller
{
    public function index()
    {
        $abonne_id = Abonne::where('user_id',auth()->user()->id)->first()->id ;
        $vols = Vol::where('abonne_id',$abonne_id)->paginate(10);
        return view("admin.vols.index",compact('vols'));

    }

    public function create()
    {
        return view("admin.vols.create");
    }

    
    public function store(Request $request)
    {
        $abonne_id = Abonne::where('user_id',auth()->user()->id)->first()->id ;

        Vol::create([
            'nom_compagne' => $request->nom_compagne ,
            'lieu_debart' => $request->lieu_debart ,
            'lieu_arrive' => $request->lieu_arrive ,
            'date_debart' => $request->date_debart ,
            'date_arrive' => $request->date_arrive ,
            'classage_vol' => $request->classage_vol ,
            'prix' => $request->prix ,
            'abonne_id' => $abonne_id ,
        ]);

        return redirect(route('vols.index'));
    }

    
    public function show($id)
    {
        return Vol::find($id);
    }

    
    public function edit(Vol $vol)
    {
        return view("admin.vols.create",compact('vol'));
    }

    
    public function update(Request $request, Vol $vol)
    {
        $abonne_id = Abonne::where('user_id',auth()->user()->id)->first()->id ;

        $vol->update([
            'nom_compagne' => $request->nom_compagne ,
            'lieu_debart' => $request->lieu_debart ,
            'lieu_arrive' => $request->lieu_arrive ,
            'date_debart' => $request->date_debart ,
            'date_arrive' => $request->date_arrive ,
            'classage_vol' => $request->classage_vol ,
            'prix' => $request->prix ,
            'abonne_id' => $abonne_id ,
        ]);

        return redirect(route('vols.index'));

    }

    
    public function destroy(Vol $vol)
    {
        $vol->delete();
        return redirect(route('vols.index'));
    }
}
