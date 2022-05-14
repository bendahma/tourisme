<div class="sidebar-wrapper">
   <div>
      <div class="logo-wrapper">
         <span class="back">Arrière</span>
         <div class="back-btn"><i class="fa fa-angle-left"></i></div>
         <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid">
            </i></div>
      </div>
      <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
               src="../assets/images/logo/logo-icon.png" alt=""></a></div>
      <nav class="sidebar-main">
         <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
         <div id="sidebar-menu">
            <ul class="sidebar-links" id="simple-bar">
               <li class="back-btn"><a href="index.html"><img class="img-fluid"
                        src="../assets/images/logo/logo-icon.png" alt=""></a>
                  <div class="mobile-back text-end"><span>Arrière</span><i class="fa fa-angle-right ps-2"
                        aria-hidden="true"></i></div>
               </li>

               <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title link-nav" href="{{url('/admin')}}">
                     <i data-feather="home"> </i>
                     <span>Tableau de board</span>
                  </a>
               </li>
               <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title link-nav" href="{{url('/')}}">
                     <i data-feather="home"> </i>
                     <span>Accueil</span>
                  </a>
               </li>
               @if(auth()->user()->is_admin())
               <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title" href="#"><i data-feather="users"></i><span>Abonnes </span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('abonnes.index')}}">Listes</a></li>
                     <li><a href="{{route('clients.create')}}">Nouveau abonne</a></li>
                  </ul>
               </li>
               <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title" href="#"><i data-feather="users"></i><span>Client </span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{route('clients.index')}}">Listes</a></li>
                     <li><a href="{{route('clients.create')}}">Nouveau client</a></li>
                  </ul>
               </li>
               @endif
               @if (auth()->user()->is_abonne())
               <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title" href="#"><i data-feather="map"></i><span>Voyages</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{url('admin/voyages')}}">Listes</a></li>
                     <li><a href="{{url('admin/voyages/Détail_paquet')}}">Détails du paquet</a></li>
                     <li><a href="{{url('admin/voyages/create')}}">Nouveau voyage</a></li>
                     <li><a href="{{url('admin/voyage/paquets')}}">Toutes les paquets</a></li>
                     <li><a href="{{url('admin/voyage/paquets')}}">Nouveau paquet</a></li>
                  </ul>
               </li>
               @endif

               @if (auth()->user()->is_abonne())
               <li class="sidebar-list">
                  <a class="linear-icon-link sidebar-link sidebar-title" href="#"><i
                        data-feather="briefcase"></i><span>Hotel
                     </span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{url('admin/hotels')}}">Listes</a></li>

                     <li><a href="{{url('admin/hotels/Détail_hotel')}}">Détails d'hôtel</a></li>
                     <li><a href="{{url('admin/hotels/create')}}">Nouveau hotel</a></li>

                  </ul>
               </li>
               @endif

               @if (auth()->user()->is_abonne())
               <li class="sidebar-list"><a class="linear-icon-link sidebar-link sidebar-title" href="#"><i
                        data-feather="coffee"></i><span>Vol </span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{url('admin/vols')}}">Listes</a></li>

                     <li><a href="{{url('admin/vols/Détail_vol')}}">Details de vol</a></li>
                     <li><a href="{{url('admin/vols/create')}}">Nouveau vol </a></li>

                  </ul>
               </li>
               @endif

               @if (auth()->user()->is_abonne())
               <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                        data-feather="navigation"></i><span>Bateau</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{url('admin/bateaux')}}">Liste</a></li>
                     <li><a href="{{url('admin/vols/Détail_bateau')}}"> Details de bateau </a></li>

                     <li><a href="{{url('admin/vols/create')}}">Nouveau bateau</a></li>

                  </ul>
               </li>
               @endif

               @if (auth()->user()->is_abonne())
               <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="booking.html"><i
                        data-feather="bookmark"> </i><span>Réservation</span></a>
               </li>
               @endif



               @if(auth()->user()->is_admin())
               <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title" href="#"><i data-feather="users"></i><span>Users </span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="{{url('admin/users')}}">Listes d'utilisateur</a></li>
                     <li><a href="{{url('admin/users/create')}}">Nouveau User</a></li>
                  </ul>
               </li>
               @endif


            </ul>
         </div>
         <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
      </nav>
   </div>
</div>