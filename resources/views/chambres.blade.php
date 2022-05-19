@extends('layouts.master')

@section('content')


    @include('layouts.header')

    <!-- breadcrumb start -->
    <section class="breadcrumb-section pt-0">
        <img src="{{asset('assets/images/inner-pages/bg-bread.jpg')}}" class="bg-img img-fluid blur-up lazyload" alt="">
       <div class=""></div>
        <div class="title-breadcrumb">Rica</div>
    </section>
    <!-- breadcrumb end -->


   

    <!-- section start -->
    <section class="xs-section bg-inner">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-3">
                    <div class="left-sidebar">
                        <div class="back-btn">
                            back
                        </div>
                       
                        <div class="middle-part collection-collapse-block open">
                            <a href="javascript:void(0)" class="section-title collapse-block-title">
                                <h5>latest filter</h5>
                                <img src="../assets/images/icon/adjust.png" class="img-fluid blur-up lazyload" alt="">
                            </a>
                            <div class="collection-collapse-block-content ">
                                <div class="filter-block">
                                    <div class="collection-collapse-block open">
                                        <h6 class="collapse-block-title">district</h6>
                                        <div class="collection-collapse-block-content">
                                            <div class="collection-brand-filter">
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="zara">
                                                    <label class="form-check-label" for="zara">all</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="vera-moda">
                                                    <label class="form-check-label" for="vera-moda">la
                                                        defance</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="forever-21">
                                                    <label class="form-check-label" for="forever-21">paris
                                                        center</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="roadster">
                                                    <label class="form-check-label" for="roadster">latin</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-block">
                                    <div class="collection-collapse-block open">
                                        <h6 class="collapse-block-title">facility</h6>
                                        <div class="collection-collapse-block-content">
                                            <div class="collection-brand-filter">
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="restaurant">
                                                    <label class="form-check-label"
                                                        for="restaurant">restaurant</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="wifi">
                                                    <label class="form-check-label" for="wifi">wifi</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="spa">
                                                    <label class="form-check-label" for="spa">spa & salon</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="pet">
                                                    <label class="form-check-label" for="pet">pet allowed</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="parking">
                                                    <label class="form-check-label" for="parking">parking</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="swimming">
                                                    <label class="form-check-label" for="swimming">swimming
                                                        pool</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="fitness">
                                                    <label class="form-check-label" for="fitness">fitness
                                                        center</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                        <h6 class="collapse-block-title">price range</h6>
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
                                        <h6 class="collapse-block-title">host language</h6>
                                        <div class="collection-collapse-block-content">
                                            <div class="collection-brand-filter">
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="english">
                                                    <label class="form-check-label" for="english">english</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="sign">
                                                    <label class="form-check-label" for="sign">sign language</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="italiano">
                                                    <label class="form-check-label" for="italiano">italiano</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="suomi">
                                                    <label class="form-check-label" for="suomi">suomi</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="espanol">
                                                    <label class="form-check-label" for="espanol">espanol</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="french">
                                                    <label class="form-check-label" for="french">french</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="arabic">
                                                    <label class="form-check-label" for="arabic">arabic</label>
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
                            @foreach ($chambres as $chambre)
                            <div class="col-sm-6  popular grid-item wow fadeInUp" data-class="popular">
                                <div class="special-box">
                                    <div class="special-img">
                                        <a href="hotel-single-7.html">
                                            <img src="{{asset('/storage/chambres/' . $chambre->image)}}" class="img-fluid lazyload bg-img" alt="">
                                        </a>
                                        
                                    </div>
                                    <div class="special-content">
                                        
                                            <h5 > 
                                                <span style="font-weight: bolder; font-size:1.3rem; color:black" class="my-1"> {{$chambre->hotel->nom}}  </span> 
                                                <span style="font-weight: bold; font-size:1rem; color:darkgray" class="my-1">Type :  {{$chambre->type_chambre}} </span>
                                                
                                                <span style="font-weight: bold; font-size:0.9rem; color:darkgray" class="my-1"> <i class="fas fa-map-marker-alt"></i> {{number_format($chambre->prix,2,'.',' ')}} DA</span>
                                                <span style="font-weight: bold; font-size:0.9rem; color:darkgray" class="my-1"> <i class="fas fa-map-marker-alt"></i>N° de personne : {{$chambre->nombre_personne }}</span>
                                            </h5>
                                       
                                       
                                        <div class="bottom-section">
                                            <div class="price">
                                                {{-- <span style="font-size:0.9rem; font-weight:lighter ; margin-right:1rem">les chambre a partir de </span > --}}
                                                {{-- <span> {{$hotel->chambres->mini_prix()}} </span> --}}
                                                {{-- <div class="facility-detail">
                                                    <span>swimming</span>
                                                    <span>parking</span>
                                                </div> --}}
                                                <div class="book-flight my-4 d-flex justify-content-center">
                                                    <a href="" class="btn btn-solid color1 ">Réservé cette chambre</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            @endforeach
                            
                           
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        {{ $chambres->links('vendor.pagination.bootstrap') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section End -->


    @include('layouts.footer')


@endsection