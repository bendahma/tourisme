@extends('layouts.admin.master')
@section('content')
<div class="page-body">
    <form class="theme-form mega-form" method="POST" enctype="multipart/form-data" action="{{url('/admin/vols')}}">
        @csrf


    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">

            <div class="col-12">
                <!--Hotel detail start-->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Ajouter nouveau vol</h5>
                            </div>
                            <div class="card-body">
                                <form class="theme-form mega-form">
                                    <div class="mb-3">
                                        <label class="form-label-title">Nom compagnie</label>
                                        <input class="form-control" type="text" placeholder="Nom compagnie" name='nom_compagne'>
                                    </div>

                                    <div class="row g-3">
                                        <label class="form-label-title  ">Classage vol</label>
                                        <select name="classage_vol" class="select form-control">
                                            <option disabled selected value="" >Classage vol</option>
                                            <option value="La première Classe" >La première Classe</option>
                                            <option value="La classe Affaires" >La classe Affaires</option>
                                            <option value="La classe Economique" >La classe Economique</option>
                                        </select>
                                    </div>   
                                    <div class="mb-3">
                                        <label class="form-label-title">Prix</label>
                                        <input class="form-control" type="text" placeholder="Prix" name='prix'>
                                    </div>
                                    <div class="row">
                                            <div class="col-6">
                                            <label class="form-label-title ">Date départ</label>
                                            <div class="input-group date" id="Opening"  data-target-input="nearest">
                                                <input class="form-control datetimepicker-input digits" type="date" name="date_debart" data-target="#Opening">
                                                <div class="input-group-text" data-target="#Opening" data-toggle="datetimepicker"><i class="fa fa-clock-o"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <label class="form-label-title ">Date arrivée</label>
                                            <div class="input-group date" id="Closing"
                                                data-target-input="nearest">
                                                <input class="form-control datetimepicker-input digits" type="date" name="date_arrive" data-target="#Closing">
                                                <div class="input-group-text" data-target="#Closing"  data-toggle="datetimepicker"><i class="fa fa-clock-o"></i>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row">
                                            <div class="col-6">
                                            <label class="form-label-title ">Lieu debart</label>
                                            <div class="input-group date" id="Opening"  data-target-input="nearest">
                                                <input class="form-control datetimepicker-input digits" type="text" name="lieu_debart" data-target="#Opening">
                                                <div class="input-group-text" data-target="#Opening" data-toggle="datetimepicker"><i lass="fa fa-clock-o"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <label class="form-label-title ">Lieu arrive</label>
                                            <div class="input-group date" id="Closing" data-target-input="nearest">
                                                <input class="form-control datetimepicker-input digits" type="text" name="lieu_arrive" data-target="#Closing">
                                                <div class="input-group-text" data-target="#Closing"  data-toggle="datetimepicker"><i class="fa fa-clock-o"></i>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    
                                </form>
                            </div>

                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-primary me-3">Envoyer</button>
                                <button class="btn btn-outline-primary">Annuler</button>
                            </div>


                        </div>
                    </div>

                </div>
                <!--Hotel detail end-->

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