@extends('layouts.master')
@section('content')

    @include('layouts.header')

    <!-- breadcrumb start -->
    <section class="breadcrumb-section flight-sec pt-0">
        <img src="../assets/images/flights/flight-breadcrumb.jpg" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="flight run"></div>
    </section>
    
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
                    {{-- <div class="top-bar-flight">
                        <div class="date-fare-slider">
                            <div class="fare-6">
                                <div>
                                    <a href="javascript:void(0)">
                                        <div class="fare-box">
                                            <h5 class="date">oct 14</h5>
                                            <h6 class="fare">$250</h6>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <div class="fare-box">
                                            <h5 class="date">oct 15</h5>
                                            <h6 class="fare">$250</h6>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <div class="fare-box active">
                                            <h5 class="date">oct 16</h5>
                                            <h6 class="fare">$250</h6>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <div class="fare-box">
                                            <h5 class="date">oct 17</h5>
                                            <h6 class="fare">$250</h6>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <div class="fare-box">
                                            <h5 class="date">oct 18</h5>
                                            <h6 class="fare">$250</h6>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <div class="fare-box">
                                            <h5 class="date">oct 19</h5>
                                            <h6 class="fare">$250</h6>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <div class="fare-box">
                                        <h5 class="date">oct 22</h5>
                                        <h6 class="fare">$250</h6>
                                    </div>
                                </div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <div class="fare-box">
                                            <h5 class="date">oct 22</h5>
                                            <h6 class="fare">$250</h6>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <div class="fare-box">
                                            <h5 class="date">oct 22</h5>
                                            <h6 class="fare">$250</h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="fare-calender">
                            <div>
                                <i class="far fa-calendar-alt"></i>
                                <h6 class="title">fare calender</h6>
                            </div>
                            <div class="calender-external">
                                <div id='calendar'></div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="flight-detail-sec">
                        <div class="title-bar">
                            <div class="row">
                                <div class="col-2">
                                    <p>Airline</p>
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
                                @foreach($vols as $vol)
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="logo-sec">
                                                    <img src="{{asset('/storage/vols/' . $vol->image_compagne)}}" class="img-fluid blur-up lazyload" alt="">
                                                    <span class="title">{{$vol->nom_compagne}}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="airport-part">
                                                    <div class="airport-name">
                                                        <h4>{{$vol->date_debart}}</h4>
                                                        <h6>{{$vol->lieu_debart}}</h6>
                                                    </div>
                                                    <div class="airport-progress">
                                                        <i class="fas fa-plane-departure float-start"></i>
                                                        <i class="fas fa-plane-arrival float-end"></i>
                                                    </div>
                                                    <div class="airport-name arrival">
                                                        <h4>{{$vol->date_arrive}}</h4>
                                                        <h6>{{$vol->lieu_arrive}}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="price">
                                                    <div>
                                                        <h4>{{number_format($vol->prix,2,'.',' ')}} DZD</h4>
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
                        {{ $vols->links('vendor.pagination.bootstrap') }}
                    </div>

                </div>
            </div>
        </div>
    </section>
    
    @include('layouts.footer')

    
    
@endsection
    