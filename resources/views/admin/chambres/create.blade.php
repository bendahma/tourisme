@extends('layouts.admin.master')
@section('content')
<div class="page-body">

    <form class="theme-form mega-form" method="POST" enctype="multipart/form-data" action="{{ isset($chambre) ? route('chambres.update',$chambre->id) : route('chambres.store') }}">
        @csrf
        @if (isset($chambre))
            @method('PATCH')
        @endif
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <!--Hotel detail start-->
                        
                            <div class="card">
                                <div class="card-header">
                                    <h5>Ajouter une chambre</h5>
                                </div>
                                
                                <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label-title">Photo du chambre</label>
                                            @if (isset($chambre))
                                                <img src="{{asset('/storage/chambres/' . $chambre->image)}}" alt="" style="max-width: 15%;margin-right:26px; border-type:rounded">
                                            @endif
                                            <input class="form-control" type="file" placeholder="" name="image">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label-title">Type du chambre</label>
                                            <input class="form-control" type="text" placeholder="Type de chambre" name="type_chambre" @if (isset($chambre)) value="{{ $chambre->type_chambre }}" @endif >
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label-title">Nombre des personnes</label>
                                            <input class="form-control" type="text" placeholder="Nombre des personnes" name="nombre_personne" @if (isset($chambre)) value="{{ $chambre->nombre_personne }}" @endif>
                                        </div>
                                    
                                        <div class="mb-3">
                                            <label class="form-label-title mt-4">Prix</label>
                                            <input class="form-control" type="text" name="prix" placeholder="Prix" @if (isset($chambre)) value="{{ $chambre->prix }}" @endif>
                                        </div>
                                        @if (!isset($chambre))
                                            <input type="hidden" name="hotel_id" value="{{$hotel->id}}">
                                        @endif
                                </div>
                        
                                <div class="card-footer text-end">
                                    <button  type="submit" class="btn btn-primary me-3">{{isset($chambre) ? 'Mettre à jours ' : 'Ajouté '}} chambre </button>
                                    <button class="btn btn-outline-primary">Annuler</button>
                                </div>
                            </div>

                            <!--Hotel detail end-->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
    
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