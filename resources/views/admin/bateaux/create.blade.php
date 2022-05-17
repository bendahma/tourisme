@extends('layouts.admin.master')
@section('content')

<div class="page-body">
    <form class="theme-form mega-form" method="POST" enctype="multipart/form-data" action="{{isset($bateau) ? route('bateaux.update',$bateau->id) : route('bateaux.store')}}">
    @csrf
    @if(isset($bateau))
        @method('PATCH')
    @endif
    <div class="container-fluid">
        <div class="row">

            <div class="col-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5> {{ isset($bateau) ? ' Modifier le bateau ' . $bateau->nom :  ' Ajouter un bateau ' }}</h5>
                            </div>
                            <div class="card-body">
                               
                                    <div class="mb-3">
                                        <label class="form-label-title">Photo de l'hotel</label>
                                        @if (isset($bateau))
                                            <img src="{{asset('/storage/bateaux/' . $bateau->image)}}" alt="" style="max-width: 15%;margin-right:26px; border-type:rounded">
                                        @endif
                                        <input class="form-control" type="file" placeholder="Nom d'hotel" name="image">
                                    </div>
                                    <div class="mb-3">
                                        <label for="car-type" class="form-label-title "> Nom Bateau</label>
                                        <select id="car-type" class="js-example-basic-single col-sm-12" name="nom"> 
                                            <option value="Voilier">Voilier</option>
                                            <option value="Motomarine">Motomarine</option>
                                            <option value="Yacht">Yacht</option>
                                            <option value="Catamaran">Catamaran</option>
                                        </select>
                                    </div>
                                   
                                    <div class="mb-3">
                                        <label class="form-label-title">Max personnes</label>
                                        <input class="form-control" type="text" name="max_perso" placeholder="Max de personnes" @if (isset($bateau)) value="{{$bateau->max_perso}}" @endif >
                                    </div>
                                   
                                    <div class="mb-3">
                                        <label class="form-label-title ">Prix</label>
                                        <div class="input-group mb-3"><span class="input-group-text">DA
                                            </span>
                                            <input class="form-control" placeholder="Prix" name="prix" type="text"   @if (isset($bateau)) value="{{$bateau->prix}}" @endif>
                                        </div>
                                    </div>

                                  
                              
                                <div class="row">

                                    <div class="col-6">
                                        <label class="form-label-title ">Lieu Départ</label>
                                        <div class="input-group date" id="Opening"
                                            data-target-input="nearest">
                                            <input class="form-control datetimepicker-input digits" type="text" data-target="#Opening" name="lieu_depart" @if (isset($bateau)) value="{{$bateau->lieu_depart}}" @endif>
                                            
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <label class="form-label-title ">Lieu Arrivée</label>
                                        <div class="input-group date" id="Closing" data-target-input="nearest">
                                            <input class="form-control datetimepicker-input digits" type="text" data-target="#Closing" name="lieu_arrivee" @if (isset($bateau)) value="{{$bateau->lieu_arrivee}}" @endif>
                                            
                                        </div>
                                    </div>


                                </div>
                                <div class="row">

                                    <div class="col-6">
                                        <label class="form-label-title ">Départ</label>
                                        <div class="input-group date" id="Opening" data-target-input="nearest">
                                            <input class="form-control datetimepicker-input digits" type="date" data-target="#Opening" name="date_depart" @if (isset($bateau)) value="{{$bateau->date_depart}}" @endif>
                                            <div class="input-group-text" data-target="#Opening" data-toggle="datetimepicker"><i class="fa fa-clock-o"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <label class="form-label-title ">Arrivée</label>
                                        <div class="input-group date" id="Closing" data-target-input="nearest">
                                            <input class="form-control datetimepicker-input digits" type="date" data-target="#Closing" name="date_arrivee" @if (isset($bateau)) value="{{$bateau->date_arrivee}}" @endif>
                                            <div class="input-group-text" data-target="#Closing" data-toggle="datetimepicker"><i class="fa fa-clock-o"></i>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-primary me-3">{{isset($bateau) ? 'Mettre à jours le ' : ' Ajouter un '}} bateau</button>
                                <button class="btn btn-outline-primary">Annuler</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </form>
        

    <!-- footer start-->
    <div class="container-fluid">
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