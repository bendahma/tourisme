@extends('layouts.admin.master')
@section('content')
<div class="page-body">
  <form class="theme-form mega-form" method="POST" enctype="multipart/form-data" action="{{url('/admin/abonnes')}}">
    @csrf
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
                  <form class="theme-form mega-form">

                    <div class="mb-3">
                      <label class="form-label-title ">Nom d'abonné</label>
                      <input class="form-control" type="text" placeholder="Nom d'abonné" name='nom'>
                    </div>
                    <div class="mb-3">
                      <label class="form-label-title ">Mot de passe</label>
                      <input class="form-control" type="text" placeholder="Mot de passe" name='mot_passe'>
                    </div>
                    <div class="mb-3">
                      <label class="form-label-title ">Adresse mail</label>
                      <input class="form-control" type="text" placeholder="Adresse mail" name='email'>
                    </div>

                    <div class="mb-3">
                      <label class="form-label-title ">Téléphone</label>
                      <input class="form-control" type="text" placeholder="Téléphone" name='telephone'>
                    </div>
                   
                    <div class="mb-3">
                      <label class="form-label-title ">Numéro de regitre commercial</label>
                      <input class="form-control" type="text" placeholder="N_r_c" name='num_rc'>
                    </div>
                  </form>

                </div>
                <div class="card-footer text-end">
                  <button  type="submit" class="btn btn-primary me-3">Envoyer</button>
                  <button class="btn btn-outline-primary">Annuler</button>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </form>
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
