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
                        <h5>Ajouter un abonné</h5>
                     </div>
                     <div class="card-body">
                        <form class="theme-form mega-form" method="POST"
                           action="{{ isset($abonne) ? route('abonnes.update' , $abonne->id) : route('abonnes.store') }}">
                           @csrf
                           @if (isset($abonne))
                           @method('PATCH')
                           @endif
                           <div class="mb-3">
                              <label class="form-label-title">Nom et prenom</label>
                              <input class="form-control" type="text" placeholder="Nom et prenom" name='name'
                                 @if(isset($abonne) )value="{{ $abonne->user->name }}" required @endif>
                           </div>

                           <div class="mb-3">
                              <label class="form-label-title ">Téléphone</label>
                              <input class="form-control" type="text" placeholder="Téléphone" name='telephone'
                                 @if(isset($abonne) )value="{{ $abonne->telephone }}" @endif>
                           </div>

                           <div class="mb-3">
                              <label class="form-label-title ">adresse</label>
                              <input class="form-control" type="text" placeholder="adresse" name='adresse'
                                 @if(isset($abonne) )value="{{ $abonne->adresse }}" @endif>
                           </div>

                           <div class="mb-3">
                              <label class="form-label-title ">Numéro de regitre commercial</label>
                              <input class="form-control" type="text" placeholder="N° registre commerce"
                                 name='registre_commerce' @if(isset($abonne) )value="{{ $abonne->registre_commerce }}"
                                 @endif>
                           </div>

                           <div class="mb-3">
                              <label class="form-label-title "> E-mail</label>
                              <input class="form-control" type="email" placeholder=" E-mail" name='email'
                                 @if(isset($abonne) ) value="{{ $abonne->user->email }}" required @endif>
                           </div>

                           <div class="mb-3">
                              <label class="form-label-title">Mot de passe</label>
                              <input class="form-control" type="password" placeholder="Mot de passe" name='password'
                                 @if(!isset($abonne)) required @endif>
                           </div>


                           <div class="card-footer text-end">
                              <button type="submit" class="btn btn-primary me-3">
                                 {{ isset($abonne) ? 'Mettre à jours l\'utilisateur' : 'Ajouté Abonne' }}
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