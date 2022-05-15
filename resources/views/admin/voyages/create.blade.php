@extends('layouts.admin.master')
@section('content')
<div class="page-body">
  <form class="theme-form mega-form" method="POST" enctype="multipart/form-data" action="{{isset($voyage) ? route('voyages.update',$voyage->id) : route('voyages.store')}}">
    @csrf
    @if (isset($voyage))
        @method('PATCH')
    @endif
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
                      <label class="form-label-title">Titre voyage</label>
                      <input class="form-control" type="text" placeholder="Titre voyage" name="titre" @if (isset($voyage)) value="{{$voyage->titre}}" @endif>
                    </div>
                    <div class="mb-3">
                      <label class="form-label-title">Destination</label>
                      <input class="form-control" type="text" placeholder="Adresse" name="destination" @if (isset($voyage)) value="{{$voyage->destination}}" @endif/>

                    </div>



                   

                    <div class="mb-3">
                      <label class="form-label-title ">Durée </label>
                      <div class="input-group mb-3"><span class="input-group-text">jours </span>
                      <input class="form-control" type="text" placeholder="Durée" name="duree" @if (isset($voyage)) value="{{$voyage->duree}}" @endif>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label-title ">N° des personnes </label>
                      <input class="form-control" type="text" placeholder="N° des personnes" name="max_perso" @if (isset($voyage)) value="{{$voyage->max_perso}}" @endif>
                    </div>
                    <div class="mb-3">
                      <label class="form-label-title ">Prix</label>
                      <div class="input-group mb-3"><span class="input-group-text">DA </span>
                        <input class="form-control" placeholder="Prix" name="prix" type="text" @if (isset($voyage)) value="{{$voyage->prix}}" @endif >
                      </div>
                    </div>
                   
                  </form>
                  <div class="row">

                    <div class="col-6">
                        <label class="form-label-title ">Date départ</label>
                        <div class="input-group date" id="Opening" data-target-input="nearest">
                            <input class="form-control datetimepicker-input digits" type="date" name="date_depart" data-target="#Opening" @if (isset($voyage)) value="{{$voyage->date_depart}}" @endif>
                            <div class="input-group-text" data-target="#Opening" data-toggle="datetimepicker">
                              <i class="fa fa-clock-o"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <label class="form-label-title ">Date Fin</label>
                        <div class="input-group date" id="Closing"  data-target-input="nearest">
                            <input class="form-control datetimepicker-input digits" type="date" name="date_arrivee" data-target="#Closing" @if (isset($voyage)) value="{{$voyage->date_arrivee}}" @endif>
                            <div class="input-group-text" data-target="#Closing" data-toggle="datetimepicker">
                              <i class="fa fa-clock-o"></i>
                            </div>
                        </div>
                    </div>


                </div>
                
                </div>
               
                <div class="card-footer text-end">
                  <button type="submit" class="btn btn-primary me-3"> {{ isset($voyage) ? 'Mettre à jours voyage' : 'Publie voyage'  }} </button>
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