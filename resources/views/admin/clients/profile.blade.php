@extends('layouts.admin.master')
@section('content')
<div class="page-body">
   <!-- Container-fluid starts-->
   <div class="container-fluid">
      <div class="row">

         <div class="col-12">
            <div class="row">
               <div class="col-sm-12">
                  <div class="card">
                     <div class="card-header">
                        <h5>Mon profile</h5>
                     </div>
                     <div class="card-body">
                        <form class="theme-form mega-form" method="POST"
                           action="{{ route('clients.update' , $client->id) }}">
                           @csrf
                           @if (isset($client))
                           @method('PATCH')
                           @endif
                           <div class="mb-3">
                              <label class="form-label-title">Nom et prenom</label>
                              <input class="form-control" type="text" placeholder="Nom et prenom" name='name'
                                 @if(isset($client) )value="{{ $client->user->name }}" required @endif>
                           </div>

                           <div class="mb-3">
                              <label class="form-label-title">Date de naissance</label>
                              <input class="form-control" type="text" placeholder="Date de naissance jj-mm-aaaa"
                                 name='date_naissance' @if(isset($client) )value="{{ $client->date_naissance }}"
                                 required @endif>
                           </div>

                           <div class="mb-3">
                              <label class="form-label-title ">Téléphone</label>
                              <input class="form-control" type="text" placeholder="Téléphone" name='telephone'
                                 @if(isset($client) )value="{{ $client->telephone }}" @endif>
                           </div>

                           <div class="mb-3">
                              <label class="form-label-title ">adresse</label>
                              <input class="form-control" type="text" placeholder="adresse" name='adresse'
                                 @if(isset($client) )value="{{ $client->adresse }}" @endif>
                           </div>

                           <div class="mb-3">
                              <label class="form-label-title ">Wilaya</label>
                              <input class="form-control" type="text" placeholder="Wilaya" name='wilaya'
                                 @if(isset($wilaya) )value="{{ $client->wilaya }}" @endif>
                           </div>



                           <div class="mb-3">
                              <label class="form-label-title "> E-mail</label>
                              <input class="form-control" type="email" placeholder=" E-mail" name='email'
                                 @if(isset($client) ) value="{{ $client->user->email }}" required @endif>
                           </div>

                           <div class="mb-3">
                              <label class="form-label-title">Mot de passe</label>
                              <input class="form-control" type="password" placeholder="Mot de passe" name='password'
                                 @if(!isset($client)) required @endif>
                           </div>


                           <div class="card-footer text-end">
                              <button type="submit" class="btn btn-primary me-3">
                                 Mettre à jours mon profile
                              </button>
                              <button class="btn btn-outline-primary" type="reset">Annuler</button>
                           </div>
                        </form>

                     </div>

                  </div>
               </div>

            </div>
         </div>
      </div>
   </div>
   <!-- Container-fluid Ends-->
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