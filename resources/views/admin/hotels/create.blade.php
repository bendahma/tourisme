@extends('layouts.admin.master')
@section('content')
<div class="page-body">

    <form class="theme-form mega-form" method="POST" enctype="multipart/form-data" action="{{url('/admin/hotels')}}">
        @csrf
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
                                        <input class="form-control" type="file" placeholder="Nom d'hotel" name="photo">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label-title">Nom d'hotel</label>
                                        <input class="form-control" type="text" placeholder="Nom d'hotel" name="nom">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label-title">Adresse</label>
                                        <input class="form-control" type="text" placeholder="Adresse" name="Adresse">
                                    </div>
                                   
                                    <div class="mb-3">
                                        <label class="form-label-title mt-4">Téléphone</label>
                                        <input class="form-control" type="Number"
                                            placeholder="Téléphone">
                                    </div>
                                   
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
    <div class="container-fluid">
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