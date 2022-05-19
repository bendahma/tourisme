<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Abonne;

class AbonneController extends Controller
{
    
    public function index()
    {
       // all abonne = select all users where user type is abonne
        $abonnes = Abonne::with('user')->paginate(10); 
        return view("admin.abonnes.index",compact('abonnes'));
    }

   
    public function create()
    {
        return view("admin.abonnes.create");
    }

   
    public function store(Request $request)
    {
      //  creer l'eulisateur qui est l'abonne
        $user = User::create([
           'name' => $request->name ,
           'email' => $request->email ,
           'user_type' => 'abonne' ,
           'password' => Hash::make($request->password) ,
        ]);
        // creer l'abonne
        Abonne::create([
           'user_id' => $user->id ,
           'telephone' => $request->telephone ,
           'adresse' => $request->adresse ,
           'date_naissance' => $request->date_naissance ,
           'registre_commerce' => $request->registre_commerce ,
        ]);
        // redirect vers la liste du abonne
        return redirect(route("abonnes.index"));
    }

    public function show($id)
    {
        return Abonne::find($id);
    }
  
    // ici on utilise route model biding pour select l'abonne
    public function edit(Abonne $abonne)
    {
      // return l'abonne a la create view pour etre modifier
      return view("admin.abonnes.create",compact('abonne')); 
    }

    // ici on utilise route model biding pour select l'abonne
    public function update(Request $request, Abonne $abonne)
    {
        // mettre a jours les données d'utilisateur
        $abonne->user()->update([
         'name' => $request->name,
         'email' => $request->email,
        ]);
        // mettre a jours les données d'abonne
        $abonne->update([
         'telephone' => $request->telephone ,
         'adresse' => $request->adresse ,
         'date_naissance' => $request->date_naissance ,
         'registre_commerce' => $request->registre_commerce ,
        ]);
        // redirect vers liste d'abonne
        return redirect(route('abonnes.index'));
    }

    public function destroy(Abonne $abonne)
    {
        $user = User::find($abonne->user_id)->delete();
        $abonne->delete();
        return redirect(route('abonnes.index'));
    }
}
