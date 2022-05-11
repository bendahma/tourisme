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
                                <h5>Ajouter un bateau</h5>
                            </div>
                            <div class="card-body">
                                <form class="theme-form mega-form">
                                    <div class="mb-3">
                                        <label for="car-type" class="form-label-title "> Nom Bateau</label>
                                        <select id="car-type" class="js-example-basic-single col-sm-12">

                                            <option value="MI">Voilier</option>
                                            <option value="ME">Motomarine</option>
                                            <option value="DU">Yacht</option>
                                            <option value="DU">Catamaran</option>
                                           
                                           
                                            



                                        </select>
                                    </div>
                                   
                                    <div class="mb-3">
                                        <label class="form-label-title">Max personnes</label>
                                        <input class="form-control" type="text" placeholder="Max personnes">
                                    </div>
                                   
                                    <div class="mb-3">
                                        <label class="form-label-title ">Prix</label>
                                        <div class="input-group mb-3"><span class="input-group-text">DA
                                            </span>
                                            <input class="form-control" placeholder="2000" type="text"
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
                                                type="text" data-target="#Opening">
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
                                                type="text" data-target="#Closing">
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