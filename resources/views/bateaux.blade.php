@extends('layouts.master')
@section('content')


   @include('layouts.header')

    

    <!-- breadcrumb start -->
    <section class="breadcrumb-section flight-sec pt-0">
        <img src="../assets/images/bateau/breadcrumb.jpg" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-right breadcrumb-content pt-0">
                        <div>
                            <h2>bateau search</h2>
                            <nav aria-label="breadcrumb" class="theme-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">bateau search</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->




    {{-- <!-- section start -->
    <section class="xs-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="filter-panel shadow-cls">
                        <div class="left-filter">
                            <div class="respon-filter-btn">
                                <h6> filter <i class="fas fa-sort-down"></i></h6>
                                <span class="according-menu"></span>
                            </div>
                            <div class="filters respon-filter-content filter-button-group">
                                <ul>
                                    <li class="active" data-filter="*">tout</li>
                                    <li data-filter=".popular">populaire</li>
                                    <li data-filter=".latest">dernier</li>
                                    <li data-filter=".trend">tendance</li>
                                </ul>
                            </div>
                        </div>
                        <div class="right-panel">
                            <a href="javascript:void(0)" class="filter_button filter-bottom-title">
                                <img src="../assets/images/icon/adjust.png" class="img-fluid blur-up lazyload" alt="">
                                <h5>dernier filtre</h5>
                            </a>
                            <div class="left-sidebar filter-bottom-content">
                                <div class="middle-part collection-collapse-block open">
                                    <div class="collection-collapse-block-content row">
                                        <div class="filter-block col">
                                            <div class="collection-collapse-block open">
                                                <h6 class="collapse-block-title">car type</h6>
                                                <div class="collection-collapse-block-content">
                                                    <div class="collection-brand-filter">
                                                        <div
                                                            class="form-check collection-filter-checkbox">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="wifi">
                                                            <label class="form-check-label" for="wifi">mini</label>
                                                        </div>
                                                        <div
                                                            class="form-check collection-filter-checkbox">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="parking">
                                                            <label class="form-check-label"
                                                                for="parking">sadan</label>
                                                        </div>
                                                        <div
                                                            class="form-check collection-filter-checkbox">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="swimming">
                                                            <label class="form-check-label"
                                                                for="swimming">luxury</label>
                                                        </div>
                                                        <div
                                                            class="form-check collection-filter-checkbox">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="chinese">
                                                            <label class="form-check-label" for="chinese">tempo
                                                                travel</label>
                                                        </div>
                                                        <div
                                                            class="form-check collection-filter-checkbox">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="restaurant">
                                                            <label class="form-check-label" for="restaurant">mini
                                                                bus</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="filter-block col">
                                            <div class="collection-collapse-block open">
                                                <h6 class="collapse-block-title">star category</h6>
                                                <div class="collection-collapse-block-content">
                                                    <div class="collection-brand-filter">
                                                        <div
                                                            class="form-check collection-filter-checkbox">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="five">
                                                            <label class="form-check-label rating" for="five">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <span class="ms-1">(4025)</span>
                                                            </label>
                                                        </div>
                                                        <div
                                                            class="form-check collection-filter-checkbox">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="four">
                                                            <label class="form-check-label rating" for="four">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <span class="ms-1">(2012)</span>
                                                            </label>
                                                        </div>
                                                        <div
                                                            class="form-check collection-filter-checkbox">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="three">
                                                            <label class="form-check-label rating" for="three">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <span class="ms-1">(25)</span>
                                                            </label>
                                                        </div>
                                                        <div
                                                            class="form-check collection-filter-checkbox">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="two">
                                                            <label class="form-check-label rating" for="two">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <span class="ms-1">(1)</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="filter-block col">
                                            <div class="collection-collapse-block open">
                                                <h6 class="collapse-block-title">price</h6>
                                                <div class="collection-collapse-block-content">
                                                    <div class="collection-brand-filter">
                                                        <div
                                                            class="form-check collection-filter-checkbox">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="p-1">
                                                            <label class="form-check-label" for="p-1">0 - $5</label>
                                                        </div>
                                                        <div
                                                            class="form-check collection-filter-checkbox">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="p-2">
                                                            <label class="form-check-label" for="p-2">$5 -
                                                                $10</label>
                                                        </div>
                                                        <div
                                                            class="form-check collection-filter-checkbox">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="p-3">
                                                            <label class="form-check-label" for="p-3">$10 -
                                                                $15</label>
                                                        </div>
                                                        <div
                                                            class="form-check collection-filter-checkbox">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="p-4">
                                                            <label class="form-check-label" for="p-4">$15 -
                                                                $20</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="filter-block col">
                                            <div class="collection-collapse-block open">
                                                <h6 class="collapse-block-title">capacity</h6>
                                                <div class="collection-collapse-block-content">
                                                    <div class="collection-brand-filter">
                                                        <div
                                                            class="form-check collection-filter-checkbox">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="free-d">
                                                            <label class="form-check-label" for="free-d">1-5
                                                                passenger</label>
                                                        </div>
                                                        <div
                                                            class="form-check collection-filter-checkbox">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="time">
                                                            <label class="form-check-label" for="time">6-10
                                                                passenger</label>
                                                        </div>
                                                        <div
                                                            class="form-check collection-filter-checkbox">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="zara">
                                                            <label class="form-check-label" for="zara">10 or
                                                                more</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="filter-block col">
                                            <div class="collection-collapse-block open">
                                                <h6 class="collapse-block-title">car option</h6>
                                                <div class="collection-collapse-block-content">
                                                    <div class="collection-brand-filter">
                                                        <div
                                                            class="form-check collection-filter-checkbox">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="suomi">
                                                            <label class="form-check-label"
                                                                for="suomi">automatic</label>
                                                        </div>
                                                        <div
                                                            class="form-check collection-filter-checkbox">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="english">
                                                            <label class="form-check-label"
                                                                for="english">manual</label>
                                                        </div>
                                                        <div
                                                            class="form-check collection-filter-checkbox">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="sign">
                                                            <label class="form-check-label" for="sign">air
                                                                conditioning</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-end button_bottom">
                                            <a href="javascript:void(0)" class="btn btn-solid color1 me-2">apply</a>
                                            <a href="javascript:void(0)"
                                                class="btn btn-solid color1 close-filter-bottom">close filter</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collection-grid-view">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="product-2-layout-view">
                                            <ul class="filter-select">
                                                <li></li>
                                                <li></li>
                                            </ul>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="product-3-layout-view">
                                            <ul class="filter-select">
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="product-4-layout-view">
                                            <ul class="filter-select">
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 ratio3_2">
                    <div class="product-wrapper-grid special-section grid-box">
                        <div class="row  content grid">

                           @foreach ($bateaux as $bateau)
                            <div class="col-xl-4 col-sm-6 popular grid-item wow fadeInUp" data-class="popular">
                                <div class="special-box bateau-box">
                                    <div class="special-img">
                                        <a href="#">
                                            <img src="../assets/images/bateau/car/12.jpg"
                                                class="img-fluid blur-up lazyload bg-img" alt="">
                                        </a>
                                        <div class="top-icon">
                                            <a href="#" class="" data-bs-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Add to Wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="special-content">
                                        <a href="#">
                                            <h5>{{$bateau->nom}}</h5>
                                        </a>
                                        <ul>
                                        
                                            <li>par mile/KM :<span>DZ10.0000</span></li>
                                            <li>passager : <span>4</span></li>
                                            <li>luggage : <span>2</span></li>
                                            <li>vitesse : <span>666km/h</span></li>
                                        </ul>
                                        <div class="button-botton">
                                            <a href="bateau-single-detail.html" class="btn btn-solid color1">details</a>
                                            <a href="bateau-livreing.html" class="btn btn-solid color1">livre</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="col-xl-4 col-sm-6 latest grid-item wow fadeInUp" data-class="latest">
                                <div class="special-box bateau-box">
                                    <div class="special-img">
                                        <a href="#">
                                            <img src="../assets/images/bateau/car/13.jpg"
                                                class="img-fluid blur-up lazyload bg-img" alt="">
                                        </a>
                                        <div class="top-icon">
                                            <a href="#" class="" data-bs-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Add to Wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="special-content">
                                        <a href="#">
                                            <h5>Yacht</h5>
                                        </a>
                                        <ul>
                                            
                                            <li>par mile/KM :<span>DZ20.000</span></li>
                                            <li>passager : <span>4</span></li>
                                            <li>vitesse : <span>600km/h</span></li>
                                        </ul>
                                        <div class="button-botton">
                                            <a href="bateau-single-detail.html" class="btn btn-solid color1">details</a>
                                            <a href="bateau-livreing.html" class="btn btn-solid color1">livre</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 popular grid-item wow fadeInUp" data-class="popular">
                                <div class="special-box bateau-box">
                                    <div class="special-img">
                                        <a href="#">
                                            <img src="../assets/images/bateau/car/14.jpg"
                                                class="img-fluid blur-up lazyload bg-img" alt="">
                                        </a>
                                        <div class="top-icon">
                                            <a href="#" class="" data-bs-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Add to Wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="special-content">
                                        <a href="#">
                                            <h5>Yacht</h5>
                                        </a>
                                        <ul>
                                            
                                            <li>par mile/KM :<span>DZ20.000</span></li>
                                            <li>passager : <span>4</span></li>
                                            <li>vitesse : <span>600km/h</span></li>
                                        </ul>
                                        <div class="button-botton">
                                            <a href="bateau-single-detail.html" class="btn btn-solid color1">details</a>
                                            <a href="bateau-livreing.html" class="btn btn-solid color1">livre</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 trend grid-item wow fadeInUp" data-class="trend">
                                <div class="special-box bateau-box">
                                    <div class="special-img">
                                        <a href="#">
                                            <img src="../assets/images/bateau/car/15.jpg"
                                                class="img-fluid blur-up lazyload bg-img" alt="">
                                        </a>
                                        <div class="top-icon">
                                            <a href="#" class="" data-bs-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Add to Wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="special-content">
                                        <a href="#">
                                            <h5>Motomaran</h5>
                                        </a>
                                        <ul>
                                        
                                            <li>par mile/KM :<span>DZ10.000</span></li>
                                            <li>passager : <span>4</span></li>
                                            <li>luggage : <span>2</span></li>
                                            <li>vitesse : <span>3000km/h</span></li>
                                        </ul>
                                        <div class="button-botton">
                                            <a href="bateau-single-detail.html" class="btn btn-solid color1">details</a>
                                            <a href="bateau-livreing.html" class="btn btn-solid color1">livre</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 popular grid-item wow fadeInUp" data-class="popular">
                                <div class="special-box bateau-box">
                                    <div class="special-img">
                                        <a href="#">
                                            <img src="../assets/images/bateau/car/16.jpg"
                                                class="img-fluid blur-up lazyload bg-img" alt="">
                                        </a>
                                        <div class="top-icon">
                                            <a href="#" class="" data-bs-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Add to Wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="special-content">
                                        <a href="#">
                                            <h5>Yacht</h5>
                                        </a>
                                        <ul>
                                            
                                            <li>par mile/KM :<span>DZ20.000</span></li>
                                            <li>passager : <span>4</span></li>
                                            <li>vitesse : <span>600km/h</span></li>
                                        </ul>
                                        <div class="button-botton">
                                            <a href="bateau-single-detail.html" class="btn btn-solid color1">details</a>
                                            <a href="bateau-livreing.html" class="btn btn-solid color1">livre</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 latest grid-item wow fadeInUp" data-class="latest">
                                <div class="special-box bateau-box">
                                    <div class="special-img">
                                        <a href="#">
                                            <img src="../assets/images/bateau/car/17.jpg"
                                                class="img-fluid blur-up lazyload bg-img" alt="">
                                        </a>
                                        <div class="top-icon">
                                            <a href="#" class="" data-bs-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Add to Wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="special-content">
                                        <a href="#">
                                            <h5>Yacht</h5>
                                        </a>
                                        <ul>
                                            
                                            <li>par mile/KM :<span>DZ20.000</span></li>
                                            <li>passager : <span>4</span></li>
                                            <li>vitesse : <span>600km/h</span></li>
                                        </ul>
                                        <div class="button-botton">
                                            <a href="bateau-single-detail.html" class="btn btn-solid color1">details</a>
                                            <a href="bateau-livreing.html" class="btn btn-solid color1">livre</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav aria-label="Page navigation example" class="pagination-section mt-0">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Précédant</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">suivant</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- section End --> --}}

     <!-- section start -->
     <section class="pt-0 bg-inner small-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="left-sidebar">
                        <div class="back-btn">
                            back
                        </div>
                        <div class="search-bar">
                            <input type="text" placeholder="Search here..">
                            <i class="fas fa-search"></i>
                        </div>
                        <div class="middle-part collection-collapse-block open">
                            <a href="javascript:void(0)" class="section-title collapse-block-title">
                                <h5>latest filter</h5>
                                <img src="../assets/images/icon/adjust.png" class="img-fluid blur-up lazyload" alt="">
                            </a>
                            <div class="collection-collapse-block-content ">
                                <div class="filter-block">
                                    <div class="collection-collapse-block open">
                                        <h6 class="collapse-block-title">stops</h6>
                                        <div class="collection-collapse-block-content">
                                            <div class="collection-brand-filter">
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="free-d">
                                                    <label class="form-check-label" for="free-d">non stop</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="time">
                                                    <label class="form-check-label" for="time">1 stop</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="zara">
                                                    <label class="form-check-label" for="zara">2 stop</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-block">
                                    <div class="collection-collapse-block open">
                                        <h6 class="collapse-block-title">price</h6>
                                        <div class="collection-collapse-block-content">
                                            <div class="wrapper">
                                                <div class="range-slider">
                                                    <input type="text" class="js-range-slider" value="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-block">
                                    <div class="collection-collapse-block open">
                                        <h6 class="collapse-block-title">airlines</h6>
                                        <div class="collection-collapse-block-content">
                                            <div class="collection-brand-filter">
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="wifi">
                                                    <label class="form-check-label" for="wifi">Qatar airways</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="spa">
                                                    <label class="form-check-label" for="spa">singapore
                                                        airlines</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="pet">
                                                    <label class="form-check-label" for="pet">Nippon Airways</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="parking">
                                                    <label class="form-check-label" for="parking">Cathay
                                                        Pacific</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="swimming">
                                                    <label class="form-check-label" for="swimming">Emirates</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="chinese">
                                                    <label class="form-check-label" for="chinese">Hainan
                                                        Airlines</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="restaurant">
                                                    <label class="form-check-label" for="restaurant">Qantas
                                                        Airways</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-block">
                                    <div class="collection-collapse-block open">
                                        <h6 class="collapse-block-title">departure time</h6>
                                        <div class="collection-collapse-block-content">
                                            <div class="collection-brand-filter">
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="suomi">
                                                    <label class="form-check-label" for="suomi"><img
                                                            src="../assets/images/icon/time/sunrise.png"
                                                            class="img-fluid blur-up lazyload me-1" alt=""> morning (6am
                                                        to 12pm)</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="english">
                                                    <label class="form-check-label" for="english"><img
                                                            src="../assets/images/icon/time/sun.png"
                                                            class="img-fluid blur-up lazyload me-1" alt=""> noon (12pm
                                                        to 6pm)</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="sign">
                                                    <label class="form-check-label" for="sign"><img
                                                            src="../assets/images/icon/time/night.png"
                                                            class="img-fluid blur-up lazyload me-1" alt=""> evening
                                                        (after 6pm)</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-block">
                                    <div class="collection-collapse-block open">
                                        <h6 class="collapse-block-title">arrival time</h6>
                                        <div class="collection-collapse-block-content">
                                            <div class="collection-brand-filter">
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="morning">
                                                    <label class="form-check-label" for="morning"><img
                                                            src="../assets/images/icon/time/sunrise.png"
                                                            class="img-fluid blur-up lazyload me-1" alt=""> morning (6am
                                                        to 12pm)</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="noon">
                                                    <label class="form-check-label" for="noon"><img
                                                            src="../assets/images/icon/time/sun.png"
                                                            class="img-fluid blur-up lazyload me-1" alt=""> noon (12pm
                                                        to 6pm)</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="evening">
                                                    <label class="form-check-label" for="evening"><img
                                                            src="../assets/images/icon/time/night.png"
                                                            class="img-fluid blur-up lazyload me-1" alt=""> evening
                                                        (after 6pm)</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-info">
                            <h5><span>i</span> need help</h5>
                            <h4>856 - 215 - 211</h4>
                            <h6>Monday to Friday 9.00am - 7.30pm</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 ratio3_2">
                    <a href="javascript:void(0)" class="mobile-filter border-top-0">
                        <h5>latest filter</h5>
                        <img src="../assets/images/icon/adjust.png" class="img-fluid blur-up lazyload" alt="">
                    </a>
                   
                    <div class="flight-detail-sec">
                        <div class="title-bar">
                            <div class="row">
                                <div class="col-2">
                                    <p>Compagnie</p>
                                </div>
                                <div class="col-5">
                                    <p>departure & arrival</p>
                                </div>
                                <div class="col-2">
                                    <p>price</p>
                                </div>
                            </div>
                        </div>
                            
                    
                        <div class="detail-bar">
                            <div class="detail-wrap wow fadeInUp">
                                @foreach($bateaux as $b)
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="logo-sec">
                                                    <img src="{{asset('/storage/bateaux/' . $b->image)}}" class="img-fluid blur-up lazyload" alt="">
                                                    <span class="title">{{$b->nom}}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="airport-part">
                                                    <div class="airport-name">
                                                        <h4>{{$b->date_depart}}</h4>
                                                        <h6>{{$b->lieu_depart}}</h6>
                                                    </div>
                                                    <div class="airport-progress">
                                                        <i class="fas fa-plane-departure float-start"></i>
                                                        <i class="fas fa-plane-arrival float-end"></i>
                                                    </div>
                                                    <div class="airport-name arrival">
                                                        <h4>{{$b->date_arrivee}}</h4>
                                                        <h6>{{$b->lieu_arrivee}}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="price">
                                                    <div>
                                                        <h4>{{number_format($b->prix,2,'.',' ')}} DZD</h4>
                                                        {{-- <span>non refundable</span> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="book-flight">
                                                    <a href="" class="btn btn-solid color1 ">Reservé</a>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach
                            </div>
                        </div>
                        
                    </div>
                    <div class="d-flex justify-content-center">
                        {{ $bateaux->links('vendor.pagination.bootstrap') }}
                    </div>

                </div>
            </div>
        </div>
    </section>


    @include('layouts.footer')

    @endsection