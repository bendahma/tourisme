@extends('layouts.master')

@section('content')

    <!-- header start -->
    <header class="inner-page overlay-black py-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="menu">
                        <div class="brand-logo">
                            <a href="/">
                                <img src="../assets/images/icon/footer-logo.png" alt="" class="img-fluid blur-up lazyload">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--  header end -->


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
                                            <a href="tour-single-6.html"> <img src="../assets/images/tour/tour/7.jpg" class="img-fluid blur-up lazyload bg-img" alt=""> </a>
                                            <div class="top-icon">
                                                <a href="#" class="" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="special-content">
                                            <a href="tour-single-6.html">
                                                <h5> {{$voyage->nom_v}} </h5>
                                            </a>
                                            <div class="tour-detail">
                                                <h6>
                                                    <i class="fas fa-plane-departure me-3"></i> 
                                                    Kuta (2N) → Lombok (2N) → Ubud (2N) 
                                                    <i class="fas fa-plane-arrival ms-3"></i>
                                                </h6>

                                                <div class="include-sec">
                                                    <span>include at this price</span>
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
                                                        <h6><del>$1300</del>$1245</h6>
                                                        <span>price per person</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="label-offer">Recommended</div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-sm-6 latest grid-item wow fadeInUp" data-class="latest">
                                <div class="special-box p-0">
                                    <div class="special-img">
                                        <a href="tour-single-6.html">
                                            <img src="../assets/images/tour/tour/8.jpg"
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
                                        <a href="tour-single-6.html">
                                            <h5>best of europe<span>(6N 7D)</span></h5>
                                        </a>
                                        <div class="tour-detail">

                                            <h6><i class="fas fa-plane-departure me-3"></i> Kuta (2N) → Lombok (2N) →
                                                Ubud (2N) <i class="fas fa-plane-arrival ms-3"></i></h6>
                                            <div class="include-sec">
                                                <span>include at this price</span>
                                                <ul class="include">
                                                    <li><img src="../assets/images/icon/tour/hotel.png"
                                                            class="img-fluid blur-up lazyload" alt=""
                                                            data-bs-toggle="tooltip" data-placement="top" title="Hotel">
                                                        hotels</li>
                                                    <li><img src="../assets/images/icon/tour/airplane.png"
                                                            class="img-fluid blur-up lazyload" alt=""
                                                            data-bs-toggle="tooltip" data-placement="top" title="Flight">
                                                        flights</li>
                                                    <li><img src="../assets/images/icon/tour/fork.png"
                                                            class="img-fluid blur-up lazyload" alt=""
                                                            data-bs-toggle="tooltip" data-placement="top"
                                                            title="Meals">meals</li>
                                                    <li class="not-include"><img
                                                            src="../assets/images/icon/tour/photo-camera.png"
                                                            class="img-fluid blur-up lazyload" alt=""
                                                            data-bs-toggle="tooltip" data-placement="top"
                                                            title="Sightseeing">sightseeing</li>
                                                    <li class="not-include"><img
                                                            src="../assets/images/icon/tour/visa.png"
                                                            class="img-fluid blur-up lazyload" alt=""
                                                            data-bs-toggle="tooltip" data-placement="top" title="Visa">visa
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="bottom-section">
                                                <div class="price">
                                                    <h6><del>$1300</del>$1245</h6>
                                                    <span>price per person</span>
                                                </div>
                                            </div>
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
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- section End -->


    <!-- footer start -->
    <footer>
        <div class="footer section-b-space section-t-space">
            <div class="container">
                <div class="row order-row">
                    <div class="col-xl-2 col-md-6 order-cls">
                        <div class="footer-title mobile-title">
                            <h5>contacter nous</h5>
                        </div>
                        <div class="footer-content">
                            <div class="contact-detail">
                                <div class="footer-logo">
                                    <img src="../assets/images/icon/footer-logo.png" alt=""
                                        class="img-fluid blur-up lazyload">
                                </div>
                                <p>............................................................................</p>
                                <ul class="contact-list">
                                    <li><i class="fas fa-map-marker-alt"></i> A-32, Tlemcen,Algérie.</li>
                                    <li><i class="fas fa-phone-alt"></i>  +213 51 84 57 51 81</li>
                                    <li><i class="fas fa-envelope"></i> contact@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-3">
                        <div class="footer-space">
                            <div class="footer-title">
                                <h5>à propos</h5>
                            </div>
                            <div class="footer-content">
                                <div class="footer-links">
                                    <ul>
                                        <li><a href="#">à propos de nous</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">connexion</a></li>
                                        <li><a href="#">S'inscrire</a></li>
                                        <li><a href="#">termes & co.</a></li>
                                        <li><a href="#">intimité</a></li>
                                        <li><a href="#">support</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="footer-title">
                            <h5>top places</h5>
                        </div>
                        <div class="footer-content">
                            <div class="footer-place">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="place rounded5">
                                            <a href="#">
                                                <img src="../assets/images/tour/footer/1.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                <div class="overlay">
                                                    <h6>jijel</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="place rounded5">
                                            <a href="#">
                                                <img src="../assets/images/tour/footer/2.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                <div class="overlay">
                                                    <h6>plage</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="place rounded5">
                                            <a href="#">
                                                <img src="../assets/images/tour/footer/3.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                <div class="overlay">
                                                    <h6>Oran</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="place rounded5">
                                            <a href="#">
                                                <img src="../assets/images/tour/footer/4.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                <div class="overlay">
                                                    <h6>Ville</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="place rounded5">
                                            <a href="#">
                                                <img src="../assets/images/tour/footer/5.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                <div class="overlay">
                                                    <h6>Montagne</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="place rounded5">
                                            <a href="#">
                                                <img src="../assets/images/tour/footer/6.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                <div class="overlay">
                                                    <h6>sauvage</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-3 order-cls">
                        <div class="footer-space">
                            <div class="footer-title">
                                <h5>Liens utiles</h5>
                            </div>
                            <div class="footer-content">
                                <div class="footer-links">
                                    <ul>
                                        <li><a href="#">Accueil</a></li>
                                        <li><a href="#">votre bateau</a></li>
                                        <li><a href="#">dernière vidéo</a></li>
                                        <li><a href="#">services</a></li>
                                        <li><a href="#">accord de réservation</a></li>
                                        <li><a href="#">Appel d'urgence</a></li>
                                        <li><a href="#">application mobile</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="footer-title">
                            <h5>new topics</h5>
                        </div>
                        <div class="footer-content">
                            <div class="footer-blog">
                                <div class="media">
                                    <div class="img-part rounded5">
                                        <a href="#"><img src="../assets/images/cab/blog-footer/1.jpg"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                    </div>
                                    <div class="media-body">
                                        <h5>nouvelles récentes</h5>
                                        <p>...........................................................</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="img-part rounded5">
                                        <a href=""><img src="../assets/images/cab/blog-footer/2.jpg"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                    </div>
                                    <div class="media-body">
                                        <h5>nouvelles récentes</h5>
                                        <p>..........................................................</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="container">
                <div class="row ">
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="copy-right">
                            <p>copyright 2019 rica by <i class="fas fa-heart"></i> pixelstrap</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->


    <!-- tap to top -->
    <div class="tap-top">
        <div>
            <i class="fas fa-angle-up"></i>
        </div>
    </div>

@endsection