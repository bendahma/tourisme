@extends('layouts.master')

@section('content')

    @include('layouts.header')

    <!-- breadcrumb start -->
    <section class="breadcrumb-section parallax-img pt-0">
        <img src="../assets/images/inner-pages/breadcrumb1.jpg" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="breadcrumb-content overlay-black">
            <div>
                <h2>holiday package</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">holiday package</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="bird-animation">
            <div class="bird-container bird-container--one">
                <div class="bird bird--one"></div>
            </div>
            <div class="bird-container bird-container--two">
                <div class="bird bird--two"></div>
            </div>
            <div class="bird-container bird-container--three">
                <div class="bird bird--three"></div>
            </div>
            <div class="bird-container bird-container--four">
                <div class="bird bird--four"></div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- section start -->
    <section class="small-section bg-inner">
        <div class="container">
            <div class="row">
                {{-- <div class="col-12">
                    <div class="filter-panel right-filter open-cls">
                        <div class="left-filter">
                            <div class="respon-filter-btn">
                                <h6> filter <i class="fas fa-sort-down"></i></h6>
                                <span class="according-menu"></span>
                            </div>
                            <div class="filters respon-filter-content filter-button-group">
                                <ul>
                                    <li class="active" data-filter="*">All</li>
                                    <li data-filter=".popular">popular</li>
                                    <li data-filter=".latest">latest</li>
                                    <li data-filter=".trend">trend</li>
                                </ul>
                            </div>
                        </div>
                        <div class="right-panel">
                            <a href="javascript:void(0)" class="view-map"><i class="fas fa-search"></i> find tours</a>
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
                </div> --}}
                <div class="col-xl-12 onclick-map">
                    <div class="book-table single-table bg-inner">
                        <div class="table-form classic-form">
                            <form>
                                <div class="row w-100">
                                    <div class="form-group col p-0">
                                        <input type="text" class="form-control" placeholder="Starting from">
                                        <img src="../assets/images/icon/table-no.png" class="img-fluid blur-up lazyload"
                                            alt="">
                                    </div>
                                    <div class="form-group col p-0">
                                        <input type="text" class="form-control" placeholder="Going to">
                                        <img src="../assets/images/icon/table-no.png" class="img-fluid blur-up lazyload"
                                            alt="">
                                    </div>
                                    <div class="col p-0">
                                        <input placeholder="During Date" id="datepicker" />
                                    </div>
                                </div>
                                <a href="#" class="btn btn-rounded color1">search</a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="left-sidebar sticky-cls-top">
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
                                        <h6 class="collapse-block-title">star category</h6>
                                        <div class="collection-collapse-block-content">
                                            <div class="collection-brand-filter">
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="five">
                                                    <label class="form-check-label rating" for="five">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="ms-1">(4025)</span>
                                                    </label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="four">
                                                    <label class="form-check-label rating" for="four">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <span class="ms-1">(2012)</span>
                                                    </label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="three">
                                                    <label class="form-check-label rating" for="three">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <span class="ms-1">(25)</span>
                                                    </label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="two">
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
                                <div class="filter-block">
                                    <div class="collection-collapse-block open">
                                        <h6 class="collapse-block-title">flights</h6>
                                        <div class="collection-collapse-block-content">
                                            <div class="collection-brand-filter">
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="zara">
                                                    <label class="form-check-label" for="zara">with flights</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="vera-moda">
                                                    <label class="form-check-label" for="vera-moda">without
                                                        flights</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-block">
                                    <div class="collection-collapse-block open">
                                        <h6 class="collapse-block-title">travel type</h6>
                                        <div class="collection-collapse-block-content">
                                            <div class="collection-brand-filter">
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="restaurant">
                                                    <label class="form-check-label" for="restaurant">family</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="wifi">
                                                    <label class="form-check-label" for="wifi">honeymoon</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="spa">
                                                    <label class="form-check-label" for="spa">beach</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="pet">
                                                    <label class="form-check-label" for="pet">cruise</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="parking">
                                                    <label class="form-check-label" for="parking">adventure</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="swimming">
                                                    <label class="form-check-label" for="swimming">shopping</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-block">
                                    <div class="collection-collapse-block open">
                                        <h6 class="collapse-block-title">budget</h6>
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
                                        <h6 class="collapse-block-title">trip duration</h6>
                                        <div class="collection-collapse-block-content">
                                            <div class="collection-brand-filter">
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="english">
                                                    <label class="form-check-label" for="english">upto 3
                                                        nights</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="sign">
                                                    <label class="form-check-label" for="sign">4 to 7 nights</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="italiano">
                                                    <label class="form-check-label" for="italiano">7 to 11
                                                        nights</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="suomi">
                                                    <label class="form-check-label" for="suomi">11 to 15
                                                        nights</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="espanol">
                                                    <label class="form-check-label" for="espanol">15 to 21
                                                        nights</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="french">
                                                    <label class="form-check-label" for="french">above 21
                                                        nights</label>
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
                    <div class="product-wrapper-grid special-section grid-box">
                        <div class="row  content grid">
                            @foreach ($voyages as $voyage)
                                <div class="col-sm-6 popular grid-item wow fadeInUp" data-class="popular">
                                    <div class="special-box p-0">
                                        <div class="special-img">
                                           <img src="{{asset('/storage/voyages/' . $voyage->image)}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                            <div class="top-icon">
                                                {{-- <a href="#" class="" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                                                    <i class="far fa-heart"></i>
                                                </a> --}}
                                            </div>
                                        </div>
                                        <div class="special-content">
                                            
                                                <h5> {{$voyage->titre}} </h5>
                                                <span> {{$voyage->duree}} </span>
                                            
                                            <div class="tour-detail">
                                                <h6 class="my-1">
                                                    <i class="fas fa-plane-departure me-3"></i> 
                                                    {{$voyage->destination}}
                                                    <i class="fas fa-plane-arrival ms-3"></i>
                                                </h6>

                                                <div class="include-sec" class="my-1">
                                                    <span>Le voyage assuré : </span>
                                                    <ul class="include">
                                                        <li>
                                                            <img src="../assets/images/icon/tour/hotel.png" class="img-fluid blur-up lazyload" alt="" data-bs-toggle="tooltip" data-placement="top" title="Hotel">
                                                            hotels
                                                        </li>
                                                        <li>
                                                            <img src="../assets/images/icon/tour/airplane.png" class="img-fluid blur-up lazyload" alt="" data-bs-toggle="tooltip" data-placement="top" title="Flight">
                                                            flights
                                                        </li>
                                                        <li>
                                                            <img src="../assets/images/icon/tour/fork.png" class="img-fluid blur-up lazyload" alt="" data-bs-toggle="tooltip" data-placement="top" title="Meals">
                                                                meals
                                                            </li>
                                                        <li>
                                                            <img src="../assets/images/icon/tour/photo-camera.png" class="img-fluid blur-up lazyload" alt="" data-bs-toggle="tooltip" data-placement="top" title="Sightseeing">
                                                                sightseeing
                                                            </li>
                                                        <li>
                                                            <img src="../assets/images/icon/tour/visa.png" class="img-fluid blur-up lazyload" alt="" data-bs-toggle="tooltip" data-placement="top" title="Visa">
                                                            visa
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="bottom-section">
                                                    <div class="price">
                                                        <h6>{{ number_format( $voyage->prix,2,'.',' ' )}} DA</h6>
                                                        <span></span>
                                                    </div>
                                                </div>
                                                <div class="book-flight my-4 d-flex justify-content-center">
                                                    <a href="" class="btn btn-solid color1 ">Reservé maintenant</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        {{ $voyages->links('vendor.pagination.bootstrap') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section End -->

    @include('layouts.footer')

@endsection