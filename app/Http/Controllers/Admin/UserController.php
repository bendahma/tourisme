<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.users.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.users.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->nom = $request->nom;
        $user->slug = Str::slug($request->nom,'_');
        $user->prenom= $request->prenom;
        $user->password= $request->mot_passe;
        $user->tel= $request->tel;
        $user->email= $request->email;
        $user->adresse= $request->adresse;
        $user->date_naissance= $request->date_naissance;
        
      
    
        $user->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return User::find($id);
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
        $user = new User();
        $user->nom = $request->nom;
        $user->slug = Str::slug($request->nom,'_');
        $user->prenom= $request->prenom;
        $user->mot_passe= $request->mot_passe;
        $user->tel= $request->tel;
        $user->email= $request->email;
        $user->adresse= $request->adresse;
        $user->date_naissance= $request->date_naissance;
        
      
        
        $user->save();
        return redirect('admin/users')->with('status','user ajouté');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
    }
}
