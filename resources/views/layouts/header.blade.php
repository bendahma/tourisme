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
                              <a href="#" class="nav-link menu-title">Accueil</a>

                           </li>
                           <li class="dropdown">
                              <a href="#" class="nav-link menu-title">Hôtels</a>

                           </li>
                           <li class="dropdown">
                              <a href="#" class="nav-link menu-title">Vols</a>

                           </li>
                           <li class="dropdown">
                              <a href="#" class="nav-link menu-title">Bateaux</a>

                           </li>
                           <li class="dropdown">
                              <a href="#" class="nav-link menu-title">Voyages</a>

                           </li>
                           <li class="dropdown">

                           <li class="dropdown">
                              <a href="#" class="nav-link menu-title">Contact</a>

                           </li>

                        </ul>
                     </div>
                  </div>
               </nav>
               <ul class="header-right">

                  {{-- <li class="user user-light bg_dark">
                     <a href="#">
                        <i class="fas fa-user"></i>
                     </a>
                  </li> --}}

                  @if (Route::has('login'))
                  <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                     @auth
                     <a href="{{ url('/admin') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                     @else
                     <div class="d-flex justify-content-between">

                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Se
                           connect</a>

                        @if (Route::has('register'))
                        <div class="d-flex">

                           <a href="{{ route('register_client') }}" class="mx-2 ">Client</a>

                           <a href="{{ route('register') }}" class=" mx-2">Abonné</a>

                        </div>
                     </div>

                     @endif
                     @endauth
                  </div>
                  @endif

               </ul>
            </div>
         </div>
      </div>
   </div>
</header>