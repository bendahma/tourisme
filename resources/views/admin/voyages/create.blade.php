@extends('layouts.admin.master')
@section('content')
<div class="page-body">
  <form class="theme-form mega-form" method="POST" enctype="multipart/form-data" action="{{url('/admin/voyages')}}">
    @csrf

    <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="row">

        <div class="col-12">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Nouveau voyage</h5>
                </div>
                <div class="card-body">
                  <form class="theme-form mega-form">
                    <div class="mb-3">
                      <label class="form-label-title">Nom voyage</label>
                      <input class="form-control" type="text" placeholder="Nom voyage" name="nom_v">
                    </div>
                    <div class="mb-3">
                      <label class="form-label-title">adresse</label>
                      <input class="form-control" type="text" placeholder="Adresse" name="adresse_v" />

                    </div>



                   

                    <div class="mb-3">
                      <label class="form-label-title ">Durée </label>
                      <div class="input-group mb-3"><span class="input-group-text">heure </span>
                      <input class="form-control" type="Number" placeholder="Durée" name="duree">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label-title ">Maximum des personnes </label>
                      <input class="form-control" type="Number" placeholder="Maximum des personnes" name="max_perso">
                    </div>
                    <div class="mb-3">
                      <label class="form-label-title ">Prix</label>
                      <div class="input-group mb-3"><span class="input-group-text">DA </span>
                        <input class="form-control" placeholder="DA20000" name="prix" type="text"
                          aria-label="Amount (to the nearest dollar)">
                      </div>
                    </div>
                   
                  </form>
                  <div class="row">

                    <div class="col-6">
                        <label class="form-label-title ">Départ</label>
                        <div class="input-group date" id="Opening"
                            data-target-input="nearest">
                            <input class="form-control datetimepicker-input digits"
                                type="text" name="date_depart" data-target="#Opening">
                            <div class="input-group-text" data-target="#Opening"
                                data-toggle="datetimepicker"><i
                                    class="fa fa-clock-o"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <label class="form-label-title ">Arrivée</label>
                        <div class="input-group date" id="Closing"
                            data-target-input="nearest">
                            <input class="form-control datetimepicker-input digits"
                                type="text" name="date_arrivee" data-target="#Closing">
                            <div class="input-group-text" data-target="#Closing"
                                data-toggle="datetimepicker"><i
                                    class="fa fa-clock-o"></i>
                            </div>
                        </div>
                    </div>


                </div>

                </div>
               
                <div class="card-footer text-end">
                  <button type="submit" class="btn btn-primary me-3">Envoyer</button>
                  <button class="btn btn-outline-primary">Annuler</button>
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
            <p class="mb-0">Copyright 2022 Tourisme DZ</p>
          </div>
        </div>

      </footer>
    </div>
  </div>
    
@endsection