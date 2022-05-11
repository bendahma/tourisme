@extends('layouts.admin.master')
@section('content')
<div class="page-body">
    <form class="theme-form mega-form" method="POST" enctype="multipart/form-data" action="{{url('/admin/users')}}">
        @csrf


    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">

            <div class="col-12">
                <div class="row">
                    <div class="col-sm-12">
                        <!--user detail start-->
                        <div class="card">
                            <div class="card-header">
                                <h5>Ajouter un user</h5>
                            </div>
                            <div class="card-body">
                                <form class="theme-form mega-form">
                                    <div class="mb-3">
                                        <label class="form-label-title">Nom</label>
                                        <input class="form-control" type="text" placeholder="Nom" name='nom'>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label-title">Prenom</label>
                                        <input class="form-control" type="text" placeholder="Prenom" name='prenom'>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label-title">Mot de passe</label>
                                        <input class="form-control" type="text" placeholder="Mot de passe" name='mot_passe'>
                                    </div>

                                
                                   
                                    <div class="mb-3">
                                        <label class="form-label-title  ">Adresse</label>
                                        <input type="text" placeholder="Adresse" name='adresse' class="form-control" />
                                    </div>

                                
                                    <div class="mb-3">
                                        <label class="form-label-title ">Téléphone</label>
                                        <input class="form-control" type="text" placeholder="Téléphone" name='tel'>
                                      </div>

                                    <div class="mb-3">
                                        <label class="form-label-title "> Adresse mail</label>
                                        <input class="form-control" type="email"
                                            placeholder=" Adresse mail" name='email'>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label-title ">date_naissance</label>
                                        <input class="form-control" type="form-control"
                                            placeholder=" Date_naissance" name='date_naissance'>
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
        </div>
    </div>
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