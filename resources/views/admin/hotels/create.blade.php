@extends('layouts.admin.master')
@section('content')
<div class="page-body">

    <form class="theme-form mega-form" method="POST" enctype="multipart/form-data" action="{{ isset($hotel) ? route('hotels.update',$hotel->id) : route('hotels.store') }}">
        @csrf
        @if (isset($hotel))
            @method('PATCH')
        @endif
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">

            <div class="col-12">
                <div class="row">
                    <div class="col-sm-12">
                        <!--Hotel detail start-->
                       
                        <div class="card">
                            <div class="card-header">
                                <h5>Ajouter un hotel</h5>
                            </div>
                            
                            <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label-title">Photo de l'hotel</label>
                                        @if (isset($hotel))
                                            <img src="{{asset('/storage/hotels/' . $hotel->image)}}" alt="" style="max-width: 15%;margin-right:26px; border-type:rounded">
                                        @endif
                                        <input class="form-control" type="file" placeholder="Nom d'hotel" name="image">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label-title">Nom d'hotel</label>
                                        <input class="form-control" type="text" placeholder="Nom d'hotel" name="nom" @if (isset($hotel)) value="{{ $hotel->nom }}" @endif >
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label-title">Adresse</label>
                                        <input class="form-control" type="text" placeholder="Adresse" name="adresse" @if (isset($hotel)) value="{{ $hotel->adresse }}" @endif>
                                    </div>
                                   
                                    <div class="mb-3">
                                        <label class="form-label-title mt-4">Téléphone</label>
                                        <input class="form-control" type="text" name="telephone" placeholder="Téléphone" @if (isset($hotel)) value="{{ $hotel->telephone }}" @endif>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label-title mt-4">Nombre des chambre</label>
                                        <input class="form-control" type="Number" name="nombre_chambre" placeholder="Nombre des chambres" @if (isset($hotel)) value="{{ $hotel->nombre_chambre }}" @endif>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label-title mt-4">Type d'hotel</label>
                                        <select class="form-control" name="type">
                                            <option disabled>Choisi type de l'hotel</option>
                                            <option value="2 Etoile" {{ (isset($hotel) and $hotel->type == '2 Etoile') ? 'selected' : ''}}>2 Etoile</option>
                                            <option value="3 Etoile" {{ (isset($hotel) and $hotel->type == '3 Etoile') ? 'selected' : ''}}>3 Etoile</option>
                                            <option value="4 Etoile" {{ (isset($hotel) and $hotel->type == '4 Etoile') ? 'selected' : ''}}>4 Etoile</option>
                                            <option value="5 Etoile" {{ (isset($hotel) and $hotel->type == '5 Etoile') ? 'selected' : ''}}>5 Etoile</option>
                                        </select>
                                    </div>
                                   
                            </div>
                       
                            <div class="card-footer text-end">
                                <button  type="submit" class="btn btn-primary me-3">{{isset($hotel) ? 'Mettre à jours ' : 'Ajouté '}} Hotel </button>
                                <button class="btn btn-outline-primary">Annuler</button>
                            </div>
                        </div>

                        <!--Hotel detail end-->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->


    <!--room detail start-->
    {{-- <div class="container-fluid">
        <div class="row">

            <div class="col-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Détails sur la pièce</h5>
                            </div>
                            <div class="card-body">


                                   
                                    <div class="mb-3">
                                        <label class="form-label-title ">Prix</label>
                                        <div class="input-group mb-3"><span class="input-group-text">DA
                                            </span>
                                            <input class="form-control" placeholder="200" type="text"
                                                aria-label="Amount (to the nearest dollar)">
                                        </div>
                                    </div>

                                  
                            </div>
                           
                           
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> --}}
    </form>
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