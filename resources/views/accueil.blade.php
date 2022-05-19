@extends('layouts.master')

@section('content')

{{--
<!-- pre-loader start -->
<div class="loader-wrapper img-gif">
   <img src="../assets/images/loader.gif" alt="">
</div>
<!-- pre-loader end --> --}}


<!-- header start -->
@include('layouts.header')



<!-- home section start -->
<section class="home_section  p-0">
   <div class="classic-slider no-arrow">
      <div>
         <div class="home ripple-effect">
            <img src="../assets/images/tour-bg.jpg" class="img-fluid blur-up lazyload bg-img" alt="">
         </div>
      </div>
      <div>
         <div class="home ripple-effect">
            <img src="../assets/images/tour-bg1.jpg" class="img-fluid blur-up lazyload bg-img" alt="">
         </div>
      </div>
      <div>
         <div class="home ripple-effect">
            <img src="../assets/images/tour-bg.jpg" class="img-fluid blur-up lazyload bg-img" alt="">
         </div>
      </div>
   </div>
   <div class="offre-text">
      <h6>
         <span>s</span>
         <span>t</span>
         <span>a</span>
         <span>r</span>
         <span>t</span>
         <span></span>
         <span>y</span>
         <span>o</span>
         <span>u</span>
         <span>r</span>
         <span></span>
         <span>j</span>
         <span>o</span>
         <span>u</span>
         <span>n</span>
         <span>e</span>
         <span>y</span>
      </h6>
   </div>
</section>
<div class="error"></div>



<!-- book table section start -->
<section class="book-table section-b-space p-0 single-table">
   <div class="container">
      <div class="row">
         <div class="col">
            <div class="table-form">
               <form>
                  <div class="row w-100">
                     <div class="form-groupe col p-0">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="partant de">
                        <img src="../assets/images/icon/table-no.png" class="img-fluid blur-up lazyload" alt="">
                     </div>
                     <div class="form-groupe col p-0">
                        <input type="text" class="form-control" placeholder="Aller à">
                        <img src="../assets/images/icon/table-no.png" class="img-fluid blur-up lazyload" alt="">
                     </div>
                     <div class="col p-0">
                        <input placeholder=" Date Pendant" id="datepicker" />
                     </div>
                  </div>
                  <a href="#" class="btn btn-rounded color1">Rechercher</a>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>



<!-- tours section start -->
<section class="category-sec ratio3_2 section-b-space">
   <div class="container">
      <div class="title-1 title-5">
         <span class="title-label">nouveaux offres</span>
         <h2>les voyage les plus populaires</h2>
         <p>Voyages, expériences et lieux. Tout en un service.</p>
      </div>
      <div class="row">
         <div class="col">
            <div class="slide-3 arrow-classic">
               <a href="#">
                  <div class="category-box">
                     <div class="img-category">
                        <div class="side-effect"></div>
                        <div>
                           <img src="../assets/images/tour/tour/1.jpg" alt="" class="img-fluid blur-up lazyload bg-img">
                        </div>
                        <div class="top-bar">
                           <span class="offre">offre</span>
                           <h5><del>DA32000</del>DA210000</h5>
                        </div>
                        <div class="like-cls">
                           <i class="fas fa-heart"><span class="effect"></span></i>
                        </div>
                     </div>
                     <div class="content-category">
                        <div class="top">
                           <h3>montgolfière</h3>
                           <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="far fa-star"></i>
                           </div>
                        </div>
                        <p>............</p>
                        <h6>5 jourss | 6 nuits <span> 2 personnes</span></h6>
                     </div>
                  </div>
               </a>
               <a href="#">
                  <div class="category-box">
                     <div class="img-category">
                        <div class="side-effect"></div>
                        <div>
                           <img src="../assets/images/tour/tour/1.jpg" alt="" class="img-fluid blur-up lazyload bg-img">
                        </div>
                        <div class="top-bar">
                           <span class="offre">offre</span>
                           <h5><del>DA32000</del>DA210000</h5>
                        </div>
                        <div class="like-cls">
                           <i class="fas fa-heart"><span class="effect"></span></i>
                        </div>
                     </div>
                     <div class="content-category">
                        <div class="top">
                           <h3>montgolfière</h3>
                           <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="far fa-star"></i>
                           </div>
                        </div>
                        <p>............</p>
                        <h6>5 jourss | 6 nuits <span> 2 personnes</span></h6>
                     </div>
                  </div>
               </a>
               <a href="#">
                  <div class="category-box">
                     <div class="img-category">
                        <div class="side-effect"></div>
                        <div>
                           <img src="../assets/images/tour/tour/1.jpg" alt="" class="img-fluid blur-up lazyload bg-img">
                        </div>
                        <div class="top-bar">
                           <span class="offre">offre</span>
                           <h5><del>DA32000</del>DA210000</h5>
                        </div>
                        <div class="like-cls">
                           <i class="fas fa-heart"><span class="effect"></span></i>
                        </div>
                     </div>
                     <div class="content-category">
                        <div class="top">
                           <h3>montgolfière</h3>
                           <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="far fa-star"></i>
                           </div>
                        </div>
                        <p>............</p>
                        <h6>5 jourss | 6 nuits <span> 2 personnes</span></h6>
                     </div>
                  </div>
               </a>
               <a href="">
                  <div class="category-box">
                     <div class="img-category">
                        <div class="side-effect"></div>
                        <div>
                           <img src="../assets/images/tour/tour/1.jpg" alt="" class="img-fluid blur-up lazyload bg-img">
                        </div>
                        <div class="top-bar">
                           <span class="offre">offre</span>
                           <h5><del>DA32000</del>DA210000</h5>
                        </div>
                        <div class="like-cls">
                           <i class="fas fa-heart"><span class="effect"></span></i>
                        </div>
                     </div>
                     <div class="content-category">
                        <div class="top">
                           <h3>montgolfière</h3>
                           <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="far fa-star"></i>
                           </div>
                        </div>
                        <p>............</p>
                        <h6>5 jourss | 6 nuits <span> 2 personnes</span></h6>
                     </div>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>



<!-- video section start -->
<section class="video_section parallax-img">
   <img src="../assets/images/mix/video-bg.jpg" alt="" class="img-fluid blur-up lazyload bg-img">
   <div class="container">
      <div class="row">
         <div class="col-xl-5 col-lg-6">
            <div class="video-content">
               <div>
                  <h5>C'est places limitées ! <span>Dépêche-toi!!</span></h5>
                  <h2>hvoyage de noces <span>DA50000</span> </h2>
                  <p>Spécial lune de miel en mai, découvrez Jijel pour 50 clients avec une réduction de 30 %</p>
                  <div class="timer">
                     <ul>
                        <li><span id="days"></span>Jr</li>
                        <li><span id="hours"></span>Hr</li>
                        <li><span id="minutes"></span>min</li>
                        <li><span id="seconds"></span>sec</li>
                     </ul>
                  </div>
                  <div class="bottom-section">
                     <a href="#" class="btn btn-rounded btn-sm color1">Acheter maintenant !!</a>
                     <div class="info-btn">
                        <h6>7 jouss &nbsp; | &nbsp; 8 nuits</h6>
                     </div>
                     <div class="info-btn red-info">
                        <h6>2 personne</h6>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-6 offset-xl-1 col-lg-6 order-cls">
            <div class="video-image">
               <div class="side-effect"></div>
               <img src="../assets/images/mix/video-image.jpg" class="img-fluid blur-up lazyload" alt="">
               <div data-bs-toggle="modal" data-bs-target="#video" class="video-icon">
                  <span></span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="offre-text">
      <h6>
         <span>l</span>
         <span>i</span>
         <span>m</span>
         <span>i</span>
         <span>t</span>
         <span>e</span>
         <span>d</span>
         <span></span>
         <span>t</span>
         <span>i</span>
         <span>m</span>
         <span>e</span>
      </h6>
   </div>
</section>
<div class="modal fade video-modal" id="video" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span
                  aria-hidden="true">×</span></button>
            <iframe src="https://www.youtube.com/embed/ezuKIzXJuz8" allowfullscreen></iframe>
         </div>
      </div>
   </div>
</div>



<!-- package section start-->
<section class="category-wrapper section-b-space">
   <div class="container">
      <div class="title-1 title-5">
         <span class="title-label">nouveau offre</span>
         <h2>super paquet</h2>
         <p>Voyages, expériences et lieux. Tout en un service.</p>
      </div>
      <div class="row">
         <div class="col">
            <div class="slide-2 arrow-classic">
               <div>
                  <div class="category-wrap">
                     <div class="category-img">
                        <a href="#"><img src="../assets/images/tour/tour/4.jpg" alt=""
                              class="img-fluid blur-up lazyload"></a>
                        <div class="side-effect"></div>
                     </div>
                     <div class="category-content">
                        <div>
                           <div class="top">
                              <a href="#">
                                 <h3>voyage Tlemcen</h3>
                              </a>
                              <h6>groupee</h6>
                           </div>
                           <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="far fa-star"></i>
                           </div>
                           <p>..................................................</p>
                           <div class="bottom">
                              <h3><del>DA240</del>DA200</h3>
                              <h6 class="coupon-code">Coupon code: <span>EDR45</span></h6>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div>
                  <div class="category-wrap">
                     <div class="category-img">
                        <a href="#"><img src="../assets/images/tour/tour/5.jpg" alt=""
                              class="img-fluid blur-up lazyload"></a>
                        <div class="side-effect"></div>
                     </div>
                     <div class="category-content">
                        <div>
                           <div class="top">
                              <a href="#">
                                 <h3>voyage Tlemcen</h3>
                              </a>
                              <h6>groupe</h6>
                           </div>
                           <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="far fa-star"></i>
                           </div>
                           <p>..................................................</p>
                           <div class="bottom">
                              <h3><del>DA240</del>DA200</h3>
                              <h6 class="coupon-code">Coupon code: <span>EDR45</span></h6>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div>
                  <div class="category-wrap">
                     <div class="category-img">
                        <a href="#"><img src="../assets/images/tour/tour/6.jpg" alt=""
                              class="img-fluid blur-up lazyload"></a>
                        <div class="side-effect"></div>
                     </div>
                     <div class="category-content">
                        <div class="top">
                           <a href="#">
                              <h3>voyage Tlemcen</h3>
                           </a>
                           <h6>groupe</h6>
                           <div class="like-cls">
                              <i class="fas fa-heart"><span class="effect"></span></i>
                           </div>
                        </div>
                        <div class="rating">
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="far fa-star"></i>
                        </div>
                        <p>..............................................</p>
                        <div class="bottom">
                           <h3><del>DA240</del>DA200</h3>
                           <h6 class="coupon-code">Coupon code: <span>EDR45</span></h6>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>



<!-- full banner section start -->
<section class="full-banner ">
   <img src="../assets/images/background.jpg" alt="" class="bg-img">
   <div class="container">
      <div class="row">
         <div class="offset-xl-7 col-xl-5 col-lg-6 offset-lg-6 col-md-7 offset-md-5">
            <div class="banner-content">
               <div>
                  <div class="offre-text">
                     <span class="offre">offre</span>
                     <h6>
                        <span>l</span>
                        <span>i</span>
                        <span>m</span>
                        <span>i</span>
                        <span>t</span>
                        <span>e</span>
                        <span>d</span>
                        <span></span>
                        <span>t</span>
                        <span>i</span>
                        <span>m</span>
                        <span>e</span>
                     </h6>
                  </div>
                  <h5>spécial <span>nature</span> tour offre</h5>
                  <h2>discount <span>20-30%</span></h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and type setti ng industry. Lorem Ipsum
                     has been the of industry standard dum my text ever since the 1500s,</p>
                  <h2 class="price"><del>DA600</del> DA420</h2>
                  <div class="bottom-section">
                     <a href="#" class="btn btn-rounded btn-sm color1">buy now</a>
                     <div class="info-btn">
                        <h6>7 days &nbsp; | &nbsp; 8 nights</h6>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

</section>



<!-- testimonial section start -->
<section class="testimonial_section section-b-space">
   <div class="container">
      <div class="title-1 title-5">
         <span class="title-label">latest</span>
         <h2>our guests love us</h2>
         <p class="mb-0">our tourist is satisfied and give best feedback</p>
      </div>
      <div class="row">
         <div class="offset-lg-1 col-lg-10">
            <div class="slide-1 arrow-classic">
               <div>
                  <div class="testimonial">
                     <div class="top-part">
                        <div class="img-part">
                           <div class="animation-circle-inverse"><i></i><i></i><i></i></div>
                           <img src="../assets/images/avtar/1.jpg" class="img-fluid blur-up lazyload" alt="">
                           <i class="fas fa-heart heart-icon"><span class="effect"></span></i>
                        </div>
                     </div>
                     <div class="bottom-part">
                        <p>Architecto aut error explicabo. Voluptatem eaque sequi qui beatae velit vero
                           autautem. Et adipisci perferendis corporis et similique vitae consequatur.
                           Auteveniet quam. Et ut placeat consequatur qui nihil eos quibusdam.
                           Impedit blanditiis delectus.</p>
                        <h3>mark enderess</h3>
                        <div class="rating">
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="far fa-star"></i>
                        </div>
                        <div class="quote-icon">
                           <i class="fas fa-quote-right"></i>
                        </div>
                     </div>
                  </div>
               </div>
               <div>
                  <div class="testimonial">
                     <div class="top-part">
                        <div class="img-part">
                           <div class="animation-circle-inverse"><i></i><i></i><i></i></div>
                           <img src="../assets/images/avtar/2.jpg" class="img-fluid blur-up lazyload" alt="">
                           <i class="fas fa-heart heart-icon"><span class="effect"></span></i>
                        </div>
                     </div>
                     <div class="bottom-part">
                        <p>Architecto aut error explicabo. Voluptatem eaque sequi qui beatae velit vero
                           autautem. Et adipisci perferendis corporis et similique vitae consequatur.
                           Auteveniet quam. Et ut placeat consequatur qui nihil eos quibusdam.
                           Impedit blanditiis delectus.</p>
                        <h3>mark enderess</h3>
                        <div class="rating">
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="far fa-star"></i>
                        </div>
                        <div class="quote-icon">
                           <i class="fas fa-quote-right"></i>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>



<!-- gallery section start -->
<section class="gallery-section pt-0">
   <div class="container-fluid p-0">
      <div class="row zoom-gallery m-0">

         <div class="col-2 p-0">
            <a href="../assets/images/tour/gallery/2.jpg" class="img-box">
               <div class="gallery_box">
                  <div class="gallery-img">
                     <div class="overlay"></div>
                     <img src="../assets/images/tour/gallery/2.jpg" alt="" class="img-fluid blur-up lazyload w-100">
                  </div>
                  <div class="gallery-content">
                     <h3>china town</h3>
                     <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                     </div>
                  </div>
                  <div class="view-cls"><i class="fas fa-plus"></i></div>
               </div>
            </a>
            <a href="../assets/images/tour/gallery/3.jpg" class="img-box">
               <div class="gallery_box">
                  <div class="gallery-img">
                     <div class="overlay"></div>
                     <img src="../assets/images/tour/gallery/3.jpg" alt="" class="img-fluid blur-up lazyload w-100">
                  </div>
                  <div class="gallery-content">
                     <h3>garden</h3>
                     <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                     </div>
                  </div>
                  <div class="view-cls"><i class="fas fa-plus"></i></div>
               </div>
            </a>
         </div>
         <div class="col-3 p-0">
            <a href="../assets/images/tour/gallery/4.jpg" class="img-box">
               <div class="gallery_box">
                  <div class="gallery-img">
                     <div class="overlay"></div>
                     <img src="../assets/images/tour/gallery/4.jpg" alt="" class="img-fluid blur-up lazyload w-100">
                  </div>
                  <div class="gallery-content">
                     <h3>bangkok night</h3>
                     <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                     </div>
                  </div>
                  <div class="view-cls"><i class="fas fa-plus"></i></div>
               </div>
            </a>
         </div>
         <div class="col-2 p-0">
            <a href="../assets/images/tour/gallery/5.jpg" class="img-box">
               <div class="gallery_box">
                  <div class="gallery-img">
                     <div class="overlay"></div>
                     <img src="../assets/images/tour/gallery/5.jpg" alt="" class="img-fluid blur-up lazyload w-100">
                  </div>
                  <div class="gallery-content">
                     <h3>indian zoo</h3>
                     <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                     </div>
                  </div>
                  <div class="view-cls"><i class="fas fa-plus"></i></div>
               </div>
            </a>
            <a href="../assets/images/tour/gallery/6.jpg" class="img-box">
               <div class="gallery_box">
                  <div class="gallery-img">
                     <div class="overlay"></div>
                     <img src="../assets/images/tour/gallery/6.jpg" alt="" class="img-fluid blur-up lazyload w-100">
                  </div>
                  <div class="gallery-content">
                     <h3>sunset lake</h3>
                     <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                     </div>
                  </div>
                  <div class="view-cls"><i class="fas fa-plus"></i></div>
               </div>
            </a>
         </div>
         <div class="col-5 p-0">
            <a href="../assets/images/tour/gallery/1.jpg" class="img-box">
               <div class="gallery_box">
                  <div class="gallery-img">
                     <div class="overlay"></div>
                     <img src="../assets/images/tour/gallery/1.jpg" alt="" class="img-fluid blur-up lazyload w-100">
                  </div>
                  <div class="gallery-content">
                     <h3>span water fall</h3>
                     <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                     </div>
                  </div>
                  <div class="view-cls"><i class="fas fa-plus"></i></div>
               </div>
            </a>
         </div>
      </div>
   </div>
</section>



<!-- service section start-->
<section class="section-b-space">
   <div class="container">
      <div class="title-1 title-5">
         <span class="title-label">new</span>
         <h2>some good reason</h2>
         <p>Trips, experiences, and places. All in one service.</p>
      </div>
      <div class="row service-part">
         <div class="col-lg-4">
            <div class="service-wrapper">
               <div>
                  <h3>+120 Premium tours <i class="fas fa-heart"><span class="effect"></span></i></h3>
                  <h6>120 premium tour</h6>
                  <p>Lorem Ipsum is simply dummy text of the printing and setting industry. Lorem Ipsum has
                     been the industry's ard dummy text ever since the 1500s, when an unkn....</p>
                  <div class="service-btn">
                     <a href="#" class="btn btn-rounded btn-sm color1">read more</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="service-wrapper">
               <div>
                  <h3>+1000 Customers <i class="fas fa-heart"><span class="effect"></span></i></h3>
                  <h6>1000 customers</h6>
                  <p>Lorem Ipsum is simply dummy text of the printing and setting industry. Lorem Ipsum has
                     been the industry's ard dummy text ever since the 1500s, when an unkn....</p>
                  <div class="service-btn">
                     <a href="#" class="btn btn-rounded btn-sm color1">read more</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="service-wrapper">
               <div>
                  <h3>H24 Support <i class="fas fa-heart"><span class="effect"></span></i></h3>
                  <h6>h24 support</h6>
                  <p>Lorem Ipsum is simply dummy text of the printing and setting industry. Lorem Ipsum has
                     been the industry's ard dummy text ever since the 1500s, when an unkn....</p>
                  <div class="service-btn">
                     <a href="#" class="btn btn-rounded btn-sm color1">read more</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>



<!-- app section start-->
<section class="app-section medium-section">
   <img src="../assets/images/tour/app-bg.jpg" alt="" class="img-fluid blur-up lazyload bg-img">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="app-box rounded25">
               <div>
                  <h5>spécial <span>nature</span> offre de voyage</h5>
                  <h2>Téléchargez notre application</h2>
                  <p>......................................................</p>
                  <div class="app-buttons">
                     <a href="#" class="btn btn-rounded color1"><i class="fab fa-google-play"></i> play
                        store</a>
                     <a href="#" class="btn btn-rounded app-btn"><i class="fab fa-app-store"></i> app
                        store</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>



<!-- subscribe section start -->
<section class="subscribe_section medium-section">
   <div class="container">
      <div class="row">
         <div class="col-xl-5 col-lg-6">
            <div class="subscribe-detail">
               <div>
                  <h2>abonnez-vous à nos actualités <span>nos actualités</span></h2>
                  <p>Abonnez-vous pour suivre nos nouvelles informations</p>
               </div>
            </div>
         </div>
         <div class="col-xl-7 col-lg-6">
            <div class="input-section">
               <input type="text" class="form-control" placeholder="Enter Your Email" aria-label="Recipient's username">
               <a href="#" class="btn btn-rounded btn-sm color1">s'abonner</a>
            </div>
         </div>
      </div>
   </div>
</section>


@include('layouts.footer')

@endsection