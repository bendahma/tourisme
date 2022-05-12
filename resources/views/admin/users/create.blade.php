@extends('layouts.admin.master')


@section('content')


<div class="page-body">



   <!-- Container-fluid starts-->
   <div class="container-fluid">
      <div class="row">

         <div class="col-12">
            <div class="row">
               <div class="col-sm-12">
                  <!--user detail start-->
                  <div class="card">
                     <div class="card-header">
                        <h5>Ajouter un user</h5>
                     </div>
                     <div class="card-body">
                        <form class="theme-form mega-form" method="POST"
                           action="{{ isset($user) ? route('users.update' , $user->id) : route('users.store') }}">
                           @csrf
                           @if (isset($user))
                           @method('PATCH')
                           @endif
                           <div class="mb-3">
                              <label class="form-label-title">Nom et prenom</label>
                              <input class="form-control" type="text" placeholder="Nom et prenom" name='name'
                                 @if(isset($user) )value="{{ $user->name }}" @endif>
                           </div>

                           <div class="mb-3">
                              <label class="form-label-title "> Adresse mail</label>
                              <input class="form-control" type="email" placeholder=" Adresse mail" name='email' required
                                 @if(isset($user) )value="{{ $user->email }}" @endif>
                           </div>

                           <div class="mb-3">
                              <label class="form-label-title">Mot de passe</label>
                              <input class="form-control" type="text" placeholder="Mot de passe" name='password'
                                 value="********" required>
                           </div>

                           <div class="mb-3">
                              <label class="form-label-title">Type d'utilisateur</label>
                              <select class="form-control" name='user_type' required>
                                 <option value="super_admin" {{ isset($user) && $user->user_type == 'super_admin' ?
                                    'selected' : '' }} >Super admin</option>
                                 <option value="abonne" {{ isset($user) && $user->user_type == 'abonne' ? 'selected' :
                                    '' }} >Abonné</option>
                                 <option value="client" {{ isset($user) && $user->user_type == 'client' ? 'selected' :
                                    '' }} >Client</option>
                              </select>
                           </div>
                           <div class="card-footer text-end">
                              <button type="submit" class="btn btn-primary me-3">
                                 {{ isset($user) ? 'Mettre à jours l\'utilisateur' : 'Ajouté utilisateur' }}
                              </button>
                              <button class="btn btn-outline-primary">Annuler</button>
                           </div>
                        </form>
                     </div>


                  </div>

               </div>
            </div>
         </div>
      </div>
      <!--room detail end-->
      <div class="container-fluid">
         <!-- footer start-->
         <footer class="footer">

            <div class="row">
               <div class="col-md-12 footer-copyright text-center">
                  <p class="mb-0">Copyright 2022 Tourisme DZ </p>
               </div>
            </div>

         </footer>
      </div>
   </div>

   @endsection