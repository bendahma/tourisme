<header class="overlay-black">
   <div class="container">
      <div class="row">
         <div class="col">
            <div class="menu">
               <div class="brand-logo">
                  <a href="../index.html">
                     <img src="../assets/images/icon/footer-logo.png" alt="" class="img-fluid blur-up lazyload">
                  </a>
               </div>
               <nav>
                  <div class="main-navbar">
                     <div id="mainnav">
                        <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                        <div class="menu-overlay"></div>
                        <ul class="nav-menu">
                           <li class="back-btn">
                              <div class="mobile-back text-end">
                                 <span>Retour</span>
                                 <i aria-hidden="true" class="fa fa-angle-right ps-2"></i>
                              </div>
                           </li>
                           <li class="dropdown">
                              <a href="/" class="nav-link menu-title">Accueil</a>

                           </li>
                           <li class="dropdown">
                              <a href="{{url('/hotels')}}" class="nav-link menu-title">Hôtels</a>

                           </li>
                           <li class="dropdown">
                              <a href="{{url('vols')}}" class="nav-link menu-title">Vols</a>

                           </li>
                           <li class="dropdown">
                              <a href="{{url('/bateaux')}}" class="nav-link menu-title">Bateaux</a>

                           </li>
                           <li class="dropdown">
                              <a href="{{url('/voyages')}}" class="nav-link menu-title">Voyages</a>

                           </li>
                           <li class="dropdown">

                           <li class="dropdown">
                              <a href="#" class="nav-link menu-title">Contact</a>

                           </li>
                          
                           @auth
                              <li class="dropdown">
                                 <a href="{{ url('/admin') }}" class="nav-link menu-title">
                                    Dashboard
                                 </a>
                              </li>
                              @if (auth()->user()->is_client())
                                 <li class="dropdown">
                                    <a href="" class="nav-link menu-title d-flex"> 
                                       <i class="fas fa-shopping-cart fa-2x text-danger"></i> 
                                       <span class="align-items-start mx-1"> 1 </span>
                                    </a>
                                 </li>
                              @endif
                           @endauth
                           @guest
                           <li class="dropdown">
                              <a href="{{ route('register_client') }}" class="nav-link menu-title ">Client</a>
                           </li>

                           <li class="dropdown">
                              <a href="{{ route('register') }}" class="nav-link menu-title">Agence</a>
                           </li>

                           @endguest
                          
                        </ul>
                     </div>
                  </div>
               </nav>


            </div>

         </div>
      </div>
   </div>
   </div>
</header>