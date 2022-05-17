@extends('layouts.master')
@section('content')
    {{-- <!-- pre-loader start -->
    <div class="skeleton_loader">
        @include('layouts.header')
        <section class="breadcrumb-section flight-sec"></section>
        <div class="bg-inner small-section pb-0">
            <div class="container">
                <div class="flight-search">
                    <div class="responsive-detail">
                        <div class="destination">
                            <span></span>
                        </div>
                        <div class="details">
                            <span></span>
                        </div>
                        <div class="modify-search">
                            <div class="ldr-btn"></div>
                        </div>
                    </div>
                    <div class="flight-search-detail">
                        <form class="row m-0">
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label></label>
                                    <input type="text" class="form-control open-select">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label></label>
                                    <input type="text" class="form-control open-select">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label></label>
                                    <input type="text" class="form-control open-select">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label></label>
                                    <input type="text" class="form-control open-select">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label></label>
                                    <input type="text" class="form-control open-select">
                                </div>
                            </div>
                            <div class="col-lg-2 search-col">
                                <div class="form-group">
                                    <input type="text" class="form-control open-select">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <section class="pt-0 bg-inner small-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="left-sidebar">
                            <div class="search-bar">
                                <input>
                            </div>
                            <div class="middle-part collection-collapse-block open">
                                <a href="javascript:void(0)" class="section-title collapse-block-title">
                                    <h5></h5>
                                </a>
                                <div class="collection-collapse-block-content ">
                                    <div class="filter-block">
                                        <div class="collection-collapse-block open">
                                            <h6 class="collapse-block-title"></h6>
                                            <div class="collection-collapse-block-content">
                                                <div class="collection-brand-filter">
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-block">
                                        <div class="collection-collapse-block open">
                                            <h6 class="collapse-block-title"></h6>
                                            <div class="collection-collapse-block-content">
                                                <div class="collection-brand-filter">
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-block">
                                        <div class="collection-collapse-block open">
                                            <h6 class="collapse-block-title"></h6>
                                            <div class="collection-collapse-block-content">
                                                <div class="collection-brand-filter">
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-block">
                                        <div class="collection-collapse-block open">
                                            <h6 class="collapse-block-title"></h6>
                                            <div class="collection-collapse-block-content">
                                                <div class="collection-brand-filter">
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-block">
                                        <div class="collection-collapse-block open">
                                            <h6 class="collapse-block-title"></h6>
                                            <div class="collection-collapse-block-content">
                                                <div class="collection-brand-filter">
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 ratio3_2">
                        <a href="javascript:void(0)" class="mobile-filter border-top-0">
                            <h5></h5>
                            <img src="../assets/images/icon/adjust.png" class="img-fluid blur-up lazyload" alt="">
                        </a>
                        <div class="top-bar-flight">
                            <div class="date-fare-slider">
                                <div class="fare-6">
                                    <div>
                                        <a href="javascript:void(0)">
                                            <div class="fare-box">
                                                <h5 class="date"></h5>
                                                <h6 class="fare"></h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)">
                                            <div class="fare-box">
                                                <h5 class="date"></h5>
                                                <h6 class="fare"></h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)">
                                            <div class="fare-box active">
                                                <h5 class="date"></h5>
                                                <h6 class="fare"></h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)">
                                            <div class="fare-box">
                                                <h5 class="date"></h5>
                                                <h6 class="fare"></h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)">
                                            <div class="fare-box">
                                                <h5 class="date"></h5>
                                                <h6 class="fare"></h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)">
                                            <div class="fare-box">
                                                <h5 class="date"></h5>
                                                <h6 class="fare"></h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <div class="fare-box">
                                            <h5 class="date"></h5>
                                            <h6 class="fare"></h6>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)">
                                            <div class="fare-box">
                                                <h5 class="date"></h5>
                                                <h6 class="fare"></h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)">
                                            <div class="fare-box">
                                                <h5 class="date"></h5>
                                                <h6 class="fare"></h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="fare-calender">
                                <div>
                                    <i></i>
                                    <h6 class="title"></h6>
                                </div>
                                <div class="calender-external">
                                </div>
                            </div>
                        </div>
                        <div class="flight-detail-sec">
                            <div class="title-bar">
                                <div class="row">
                                    <div class="col-2">
                                        <p></p>
                                    </div>
                                    <div class="col-5">
                                        <p></p>
                                    </div>
                                    <div class="col-2">
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="detail-bar">
                                <div class="detail-wrap">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="logo-sec">
                                                <div class="ldr-img"></div>
                                                <span class="title"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="airport-part">
                                                <div class="airport-name">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                                <div class="airport-progress">
                                                    <div class="stop">
                                                    </div>
                                                </div>
                                                <div class="airport-name arrival">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="price">
                                                <div>
                                                    <h4></h4>
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="book-flight">
                                                <div class="ldr-btn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-wrap">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="logo-sec">
                                                <div class="ldr-img"></div>
                                                <span class="title"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="airport-part">
                                                <div class="airport-name">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                                <div class="airport-progress">
                                                    <div class="stop">
                                                    </div>
                                                </div>
                                                <div class="airport-name arrival">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="price">
                                                <div>
                                                    <h4></h4>
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="book-flight">
                                                <div class="ldr-btn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-wrap">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="logo-sec">
                                                <div class="ldr-img"></div>
                                                <span class="title"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="airport-part">
                                                <div class="airport-name">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                                <div class="airport-progress">
                                                    <div class="stop">
                                                    </div>
                                                </div>
                                                <div class="airport-name arrival">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="price">
                                                <div>
                                                    <h4></h4>
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="book-flight">
                                                <div class="ldr-btn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-wrap">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="logo-sec">
                                                <div class="ldr-img"></div>
                                                <span class="title"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="airport-part">
                                                <div class="airport-name">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                                <div class="airport-progress">
                                                    <div class="stop">
                                                    </div>
                                                </div>
                                                <div class="airport-name arrival">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="price">
                                                <div>
                                                    <h4></h4>
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="book-flight">
                                                <div class="ldr-btn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-wrap">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="logo-sec">
                                                <div class="ldr-img"></div>
                                                <span class="title"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="airport-part">
                                                <div class="airport-name">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                                <div class="airport-progress">
                                                    <div class="stop">
                                                    </div>
                                                </div>
                                                <div class="airport-name arrival">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="price">
                                                <div>
                                                    <h4></h4>
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="book-flight">
                                                <div class="ldr-btn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-wrap">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="logo-sec">
                                                <div class="ldr-img"></div>
                                                <span class="title"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="airport-part">
                                                <div class="airport-name">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                                <div class="airport-progress">
                                                    <div class="stop">
                                                    </div>
                                                </div>
                                                <div class="airport-name arrival">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="price">
                                                <div>
                                                    <h4></h4>
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="book-flight">
                                                <div class="ldr-btn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-wrap">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="logo-sec">
                                                <div class="ldr-img"></div>
                                                <span class="title"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="airport-part">
                                                <div class="airport-name">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                                <div class="airport-progress">
                                                    <div class="stop">
                                                    </div>
                                                </div>
                                                <div class="airport-name arrival">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="price">
                                                <div>
                                                    <h4></h4>
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="book-flight">
                                                <div class="ldr-btn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- per-loader end --> --}}


    <!-- header start -->
    <header class="light_header py-4">
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
    


    <!-- tap to top -->
    <div class="tap-top">
        <div>
            <i class="fas fa-angle-up"></i>
        </div>
    </div>
    
    
@endsection
    