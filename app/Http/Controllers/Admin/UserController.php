<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Abonne;
use App\Models\Client;

class UserController extends Controller
{

    public function index()
    {
        $users = User::paginate(10) ;
        return view("admin.users.index",compact('users'));
    }

    public function create()
    {
        return view("admin.users.create");
    }

 
    public function store(Request $request)
    {
      $request->validate([
         'name' => ['required', 'string', 'max:255'],
         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
         'user_type' => ['required', 'string'],
         'password' => ['required', 'confirmed', Rules\Password::defaults()],
     ]);

      $user = User::create([
         'name' => $request->name ,
         'email' => $request->email ,
         'password' => Hash::make($request->password) ,
         'user_type' => $request->user_type ,
      ]);

      if($request->user_type == 'abonne'){
         Abonne::create([
            'user_id' => $user->id,
         ]);
      }

      if($request->user_type == 'client'){
         Client::create([
            'user_id' => $user->id,
         ]);
      }


        return redirect()->route('users.index') ;
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
    public function edit(User $user)
    {
        return view("admin.users.create", compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update([
           'name' => $request->name,
           'email' => $request->email,
           'user_type' => $request->user_type,
        ]);
        return redirect(route('users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        toast('L\'utilisateur supprime avec success','success');
        return redirect(route('users.index')) ;
    }
}
