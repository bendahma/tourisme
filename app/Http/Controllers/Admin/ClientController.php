<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Client;

class ClientController extends Controller
{
   
    public function index()
    {
        $clients = Client::with('user')->paginate(10);
        return view('admin.clients.index', compact('clients'));
    }

    
    public function create()
    {
        return view('admin.clients.create') ;
    }

    
    public function store(Request $request)
    {
        //  creer l'eulisateur qui est l'utilisateur
        $user = User::create([
         'name' => $request->name ,
         'email' => $request->email ,
         'user_type' => 'client' ,
         'password' => Hash::make($request->password) ,
      ]);
      // creer le client
      Client::create([
         'user_id' => $user->id ,
         'telephone' => $request->telephone ,
         'adresse' => $request->adresse ,
         'date_naissance' => $request->date_naissance ,
         'wilaya' => $request->wilaya ,
      ]);
      // redirect vers la liste des clients
      return redirect(route("clients.index"));
    }

    
    public function show(Client $client)
    {
        //
    }

   
    public function edit(Client $client)
    {
      return view('admin.clients.create',compact('client')) ;
    }

    
    public function update(Request $request, Client $client)
    {
        // mettre a jours les données d'utilisateur
        $client->user()->update([
         'name' => $request->name,
         'email' => $request->email,
        ]);
        // mettre a jours les données du client
        $client->update([
           'date_naissance' => $request->date_naissance ,
           'telephone' => $request->telephone ,
           'adresse' => $request->adresse ,
           'wilaya' => $request->wilaya ,
        ]);
        // redirect vers liste des clients
        return auth()->user()->is_client() ? redirect(route('clients.profile' , auth()->user()->id )) :  redirect(route('clients.index'));
    }

   
    public function destroy(Client $client)
    {
      $user = User::find($client->user_id)->delete();
      $client->delete();
      return redirect(route('clients.index'));
    }

    public function profile(User $user){
        $client = Client::where('user_id',$user->id)->first() ;
        return view('admin.clients.profile',compact('client'));
    }
}
