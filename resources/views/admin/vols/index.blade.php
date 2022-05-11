@extends('layouts.admin.master')
@section('content')
<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header  card-header--2">

                        <div>
                            <h5>Liste des vols</h5>
                        </div>
                        <form class="d-inline-flex">
                            <a href="add-new-restaurant.html" class="btn btn-theme"> <i
                                    data-feather="plus-square"></i>Ajouter vol
                            </a>
                        </form>
                    </div>

                    <div class="card-body">
                        <div>
                            <div class="table-responsive table-desi">
                                <table class="all-restaurant-table table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Nom companie</th>
                                            <th>Date Départ</th>
                                            <th>Date Arrivée</th>
                                            <th>Classage Vol</th>
                                            <th>Voir</th>
                                            <th>Modifier</th>
                                            <th>Supprimer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span><img src="../assets/images/restaurant/1.jpg"
                                                        alt="users"></span>
                                            </td>
                                            <td><a href="#"><span class="  d-block fw-bold ">Companie
                                                        A</span>
                                            </td>
                                            <td> 2-3-2022</td>
                                            <td>2-3-2022</td>
                                            <td>économique</td>


                                            <td>
                                                <a href="restaurant-details.html"><i class="fa fa-eye"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)"><i
                                                        class="fa fa-pencil-square-o"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)"><i class="fa fa-trash-o"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                       
                                         
                                         
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class=" pagination-box">
                        <nav class="ms-auto me-auto " aria-label="...">
                            <ul class="pagination pagination-primary">
                                <li class="page-item disabled"><a class="page-link"
                                        href="javascript:void(0)" tabindex="-1">Précédent</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a>
                                </li>
                                <li class="page-item active"><a class="page-link"
                                        href="javascript:void(0)">2 <span
                                            class="sr-only">(courant)</span></a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a>
                                </li>
                                <li class="page-item"><a class="page-link"
                                        href="javascript:void(0)">Suivant</a></li>
                            </ul>
                        </nav>
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
                    <p class="mb-0">Copyright 2022 Tourisme DZ </p>
                </div>
            </div>

        </footer>
    </div>
</div>
@endsection