@extends('layouts.master')
@section('content')



    <!-- pre-loader start -->
    <div class="loader-wrapper img-gif">
        @include('layouts.header')
        <img src="../assets/images/loader.gif" alt="">
    </div>
    <!-- pre-loader end -->


    <!-- header start -->
    
    <!--  header end -->


    <!-- breadcrumb start -->
    <section class="breadcrumb-section pt-0">
        <img src="../assets/images/inner-bg.jpg" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="breadcrumb-content">
            <div>
                <h2>contacter nous</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">contacter nous</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="title-breadcrumb">Tousime DZ</div>
    </section>
    <!-- breadcrumb end -->


    <!-- get in touch section start -->
    <section class="small-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="get-in-touch">
                        <h3>entrer en contact</h3>
                        <form>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="name" placeholder="Nom"
                                        required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="last-name" placeholder="Prenom"
                                        required="">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" class="form-control" id="review" placeholder="Telephone"
                                        required="">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" class="form-control" id="email" placeholder="Adresse mail"
                                        required="">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" placeholder="écrire votre message"
                                        id="exampleFormControlTextarea1" rows="6"></textarea>
                                </div>
                                <div class="col-md-12 submit-btn">
                                    <button class="btn btn-solid" type="submit">Envoyez votre message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 contact_right contact_section">
                    <div class="row">
                        <div class="col-md-12 col-6">
                            <div class="contact_wrap">
                                <div class="title_bar">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <h4>Adresse</h4>
                                </div>
                                <div class="contact_content">
                                    <p>549 rue de paris <br>
                                        Tlemcen</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-6">
                            <div class="contact_wrap">
                                <div class="title_bar">
                                    <i class="fas fa-envelope"></i>
                                    <h4>adresse mail</h4>
                                </div>
                                <div class="contact_content">
                                    <ul>
                                        <li>Support@TourismeDZ.com</li>
                                        <li>info@TourismeDZ.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-6">
                            <div class="contact_wrap">
                                <div class="title_bar">
                                    <i class="fas fa-phone-alt"></i>
                                    <h4>Telephone</h4>
                                </div>
                                <div class="contact_content">
                                    <ul>
                                        <li>+213 52 34 56 78 90</li>
                                        <li>+213 52 34 56 78 00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-6">
                            <div class="contact_wrap">
                                <div class="title_bar">
                                    <i class="fas fa-fax"></i>
                                    <h4>fax</h4>
                                </div>
                                <div class="contact_content">
                                    <ul>
                                        <li>+213 212 999 8888</li>
                                        <li>+213 1-2222 8888</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- get in touch section end -->


    <!-- map section start -->
    <section class="contact-bottom pt-0">
        <div class="contact-map h-100 mt-0">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.1583091352!2d-74.11976373946229!3d40.69766374859258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1563449626439!5m2!1sen!2sin"
                allowfullscreen></iframe>
        </div>
    </section>
    <!-- map section end -->


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
    <!-- tap to top end -->


    <!-- setting start -->
    <div class="theme-setting">
        <div class="dark">
            <input class="tgl tgl-skewed" id="dark" type="checkbox">
            <label class="tgl-btn" data-tg-off="Dark" data-tg-on="Light" for="dark"></label>
        </div>
        <div class="rtl">
            <input class="tgl tgl-skewed" id="rtl" type="checkbox">
            <label class="tgl-btn" data-tg-off="RTL" data-tg-on="LTR" for="rtl"></label>
        </div>
    </div>
   @endsection