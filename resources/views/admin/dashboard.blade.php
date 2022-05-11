@extends('layouts.admin.master')
@section('content')
<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <!-- chart caard section start -->
            <div class="col-sm-6 col-xxl-3 col-lg-6">
                <div class="b-b-primary border-5 border-0 card o-hidden">
                    <div class="custome-1-bg b-r-4 card-body">
                        <div class="media align-items-center static-top-widget">

                            <div class="media-body p-0">
                                <span class="m-0">Total des gains</span>
                                <h4 class="mb-0 counter">6659
                                    <span class="badge badge-light-primary grow  "><i
                                            data-feather="trending-up">
                                        </i>8.5%</span>
                                </h4>

                            </div>
                            <div class="align-self-center text-center"><i data-feather="database"></i></div>



                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xxl-3 col-lg-6">
                <div class="b-b-danger border-5  border-0 card o-hidden">
                    <div class=" custome-2-bg  b-r-4 card-body">
                        <div class="media static-top-widget">

                            <div class="media-body p-0"><span class="m-0">Réservation totale</span>
                                <h4 class="mb-0 counter">9856
                                    <span class="badge badge-light-danger grow  "><i
                                            data-feather="trending-down">
                                        </i>8.5%</span>
                                </h4>

                            </div>
                            <div class="align-self-center text-center"><i data-feather="shopping-bag"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xxl-3 col-lg-6">
                <div class="b-b-secondary border-5 border-0  card o-hidden">
                    <div class=" custome-3-bg b-r-4 card-body">
                        <div class="media static-top-widget">

                            <div class="media-body p-0"><span class="m-0">Commentaires</span>
                                <h4 class="mb-0 counter">893
                                    <span class="badge badge-light-secondary grow  "><i
                                            data-feather="trending-up">
                                        </i>8.5%</span>
                                </h4>

                            </div>
                            <div class="align-self-center text-center"><i data-feather="message-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xxl-3 col-lg-6">
                <div class="b-b-success border-5 border-0 card o-hidden">
                    <div class=" custome-4-bg b-r-4 card-body">
                        <div class="media static-top-widget">

                            <div class="media-body p-0"><span class="m-0">Utilisateur total</span>
                                <h4 class="mb-0 counter">45631
                                    <span class="badge badge-light-success grow"><i
                                            data-feather="trending-down">
                                        </i>8.5%</span>
                                </h4>

                            </div>
                            <div class="align-self-center text-center"><i data-feather="user-plus"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- chart caard section start -->
            <!-- visitors chart  start-->
            <div class="col-xl-4">
                <div class="h-100">
                    <div class="card o-hidden  ">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="card-header-title">
                                    <h4>Visiteurs </h4>

                                </div>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" id="dropdownMenuButton"
                                        type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">Hebdomadaire</button>
                                    <div class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="dropdownMenuButton"><a class="dropdown-item"
                                            href="#">Hebdomadaire</a><a class="dropdown-item"
                                            href="#">Mensuel</a><a class="dropdown-item" href="#">Annuel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="pie-chart">
                                <div id="pie-chart-visitors"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- visitors chart  end-->
            <!-- Earning chart  star-->
            <div class="col-xl-8">
                <div class="card o-hidden ">
                    <div class="card-header">

                        <div class="card-header-title">
                            <h4>Revenus </h4>
                        </div>
                        <div class="card-body p-0">
                            <div id="bar-chart-earning"></div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Earning chart  end-->
            <!-- Booking history  start-->
            <div class="col-xxl-8">
                <div class="card">
                    <div class="card-header">
                        <div class="card-header-title">
                            <h5>Historique des réservations</h5>

                        </div>


                    </div>
                    <div class="card-body">
                        <div class="table-responsive ">
                            <table class=" dashboard-table table border-0 ">

                                <tbody>
                                    <tr>
                                        <td><img src="../../adm/assets/images/tours/1.jpg" alt="tour 1"></td>
                                        <td><span class="fw-500">Montgolfière
                                                </span><span>Alger Air</span></td>
                                        <td><span> 10 Nuit </span></td>
                                        <td><span><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24">
                                                    <title>vol_décollage</title>
                                                    <path
                                                        d="M22.078 9.656q0.141 0.609-0.164 1.125t-0.914 0.703q-5.813 1.547-9.656 2.578l-5.297 1.406-1.594 0.469-2.625-4.5 1.453-0.375 1.969 1.5 4.969-1.313-4.125-7.172 1.922-0.516 6.891 6.422 5.344-1.406q0.609-0.188 1.148 0.141t0.68 0.938zM2.484 18.984h19.031v2.016h-19.031v-2.016z">
                                                    </path>
                                                </svg>02 Nouvembre</span>
                                        </td>
                                        <td><span></span>
                                            <span>25h 10m (2 stop)</span>
                                        </td>
                                        <td><span><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24">
                                                    <title>vol_land</title>
                                                    <path
                                                        d="M14.016 14.438q-3.844-1.078-9.656-2.578l-1.594-0.469v-5.156l1.453 0.375 0.938 2.344 4.969 1.313v-8.25l1.922 0.516 2.766 9 5.297 1.406q0.609 0.188 0.914 0.727t0.164 1.148q-0.188 0.609-0.703 0.891t-1.125 0.141zM2.484 18.984h19.031v2.016h-19.031v-2.016z">
                                                    </path>
                                                </svg>03 Nouvembre</span>
                                        </td>
                                        <td><span class="badge badge-primary">Activer</span>
                                        </td>
                                        <td><span>DA90000</span>
                                        </td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Booking history  end-->

            <!-- datepicker start -->
            <div class="col-lg-6 col-xxl-4">
                <div class="datepicker-dashboard">
                    <div class="datepicker-here" data-language="en"></div>
                </div>
            </div>
            <!-- datepicker start -->


            <!-- Traficks chart start -->
            <div class="col-lg-6">
                <div class="card ">
                    <div class="d-flex align-items-center justify-content-between  card-header">
                        <div class="card-header-title">
                            <h5>Trafic</h5>
                        </div>


                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button class="btn btn-outline-light txt-dark " type="button"
                                data-bs-original-title="" title="">Journée</button>
                            <button class="btn btn-outline-light txt-dark" type="button"
                                data-bs-original-title="" title="">Semaine</button>
                            <button class="btn btn-outline-light txt-dark active" type="button"
                                data-bs-original-title="" title="">Mois</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="traffic-chart"></div>
                    </div>

                </div>

            </div>
            <!-- Traficks chart end -->
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header-title card-header">
                        <h5>Carte du monde</h5>
                    </div>
                    <div class="card-body">
                        <div class="jvector-map-height" id="world-map"></div>
                    </div>
                </div>
            </div>
            <div class="col-12">


                <div class="card">
                    <div class="card-header-title card-header">
                        <h5>voyages</h5>
                    </div>
                    <div class="card-body">

                        <div class="dashboard-tours ratio3_2">
                            <div class="w-100 dashboard-slider">




                                <div class="category-box">
                                    <div class="img-category">

                                        <div class="img-category-box">
                                            <img src="../../adm/assets/images/tours/1.jpg" alt=""
                                                class="img-fluid bg-img ">
                                        </div>
                                        <div class="top-bar">
                                            <span class="offer">offre</span>
                                            <h5><del>DA38000</del> DA398000</h5>
                                        </div>
                                        <div class="like-cls">
                                            <i class="fa fa-heart"><span class="effect"></span></i>
                                        </div>
                                    </div>
                                    <div class="content-category">
                                        <div class="top">
                                            <h3>montgolfière</h3>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <p>Description.</p>
                                        <h6>5 jours | 6 nuits <span> 2 personnes</span></h6>
                                    </div>
                                </div>
                                <div class="category-box">
                                    <div class="img-category">

                                        <div class="img-category-box">
                                            <img src="../../adm/assets/images/tours/1.jpg" alt=""
                                                class="img-fluid bg-img ">
                                        </div>
                                        <div class="top-bar">
                                            <span class="offer">offre</span>
                                            <h5><del>DA38000</del> DA398000</h5>
                                        </div>
                                        <div class="like-cls">
                                            <i class="fa fa-heart"><span class="effect"></span></i>
                                        </div>
                                    </div>
                                    <div class="content-category">
                                        <div class="top">
                                            <h3>montgolfière</h3>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <p>Description.</p>
                                        <h6>5 jours | 6 nuits <span> 2 personnes</span></h6>
                                    </div>
                                </div>
                                <div class="category-box">
                                    <div class="img-category">

                                        <div class="img-category-box">
                                            <img src="../../adm/assets/images/tours/1.jpg" alt=""
                                                class="img-fluid bg-img ">
                                        </div>
                                        <div class="top-bar">
                                            <span class="offer">offre</span>
                                            <h5><del>DA38000</del> DA398000</h5>
                                        </div>
                                        <div class="like-cls">
                                            <i class="fa fa-heart"><span class="effect"></span></i>
                                        </div>
                                    </div>
                                    <div class="content-category">
                                        <div class="top">
                                            <h3>montgolfière</h3>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <p>Description.</p>
                                        <h6>5 jours | 6 nuits <span> 2 personnes</span></h6>
                                    </div>
                                </div>
                                <div class="category-box">
                                    <div class="img-category">

                                        <div class="img-category-box">
                                            <img src="../../adm/assets/images/tours/1.jpg" alt=""
                                                class="img-fluid bg-img ">
                                        </div>
                                        <div class="top-bar">
                                            <span class="offer">offre</span>
                                            <h5><del>DA38000</del> DA398000</h5>
                                        </div>
                                        <div class="like-cls">
                                            <i class="fa fa-heart"><span class="effect"></span></i>
                                        </div>
                                    </div>
                                    <div class="content-category">
                                        <div class="top">
                                            <h3>montgolfière</h3>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <p>Description.</p>
                                        <h6>5 jours | 6 nuits <span> 2 personnes</span></h6>
                                    </div>
                                </div>
                                <div class="category-box">
                                    <div class="img-category">

                                        <div class="img-category-box">
                                            <img src="../../adm/assets/images/tours/1.jpg" alt=""
                                                class="img-fluid bg-img ">
                                        </div>
                                        <div class="top-bar">
                                            <span class="offer">offre</span>
                                            <h5><del>DA38000</del> DA398000</h5>
                                        </div>
                                        <div class="like-cls">
                                            <i class="fa fa-heart"><span class="effect"></span></i>
                                        </div>
                                    </div>
                                    <div class="content-category">
                                        <div class="top">
                                            <h3>montgolfière</h3>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <p>Description.</p>
                                        <h6>5 jours | 6 nuits <span> 2 personnes</span></h6>
                                    </div>
                                </div>
                                <div class="category-box">
                                    <div class="img-category">

                                        <div class="img-category-box">
                                            <img src="../../adm/assets/images/tours/1.jpg" alt=""
                                                class="img-fluid bg-img ">
                                        </div>
                                        <div class="top-bar">
                                            <span class="offer">offre</span>
                                            <h5><del>DA38000</del> DA398000</h5>
                                        </div>
                                        <div class="like-cls">
                                            <i class="fa fa-heart"><span class="effect"></span></i>
                                        </div>
                                    </div>
                                    <div class="content-category">
                                        <div class="top">
                                            <h3>montgolfière</h3>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <p>Description.</p>
                                        <h6>5 jours | 6 nuits <span> 2 personnes</span></h6>
                                    </div>
                                </div>




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
                    <p class="mb-0">Copyright 2022 TOURISME DZ </p>
                </div>
            </div>

        </footer>
    </div>
</div>
    
@endsection