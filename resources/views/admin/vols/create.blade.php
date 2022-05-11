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
                                        <input class="form-control" type="text"
                                            placeholder="Nom compagnie" name='nom_compa'>
                                    </div>


                                    <div class="mb-3 mt-3">
                                        <label class="form-label-title  ">Classage vol</label>
                                    </div>
                                    <div class="row g-3">

                                    
                                            <select name="classage_vol" class="select form-control">
                                                <option disabled selected value="" >Classage vol</option>
                                                <option value="2" >La première Classe</option>
                                                <option value="3" >La classe Affaires</option>
                                                <option value="4" >La classe Economique</option>
                                            </select>
                                        
                                    </div>   
                                    </div>
                                    <div class="row">
                                            <div class="col-6">
                                            <label class="form-label-title ">Départ</label>
                                            <div class="input-group date" id="Opening"
                                                data-target-input="nearest">
                                                <input class="form-control datetimepicker-input digits"
                                                    type="text" name="Date_D" data-target="#Opening">
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
                                                    type="text" name="Date_A" data-target="#Closing">
                                                <div class="input-group-text" data-target="#Closing"
                                                    data-toggle="datetimepicker"><i
                                                        class="fa fa-clock-o"></i>
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