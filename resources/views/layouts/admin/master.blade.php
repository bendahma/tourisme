<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description"
      content="Rica admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
   <meta name="keywords"
      content="admin template, Rica admin template, dashboard template, flat admin template, responsive admin template, web app">
   <meta name="author" content="pixelstrap">
   <link rel="icon" href="../../adm/assets/images/favicon.png" type="image/x-icon">
   <link rel="shortcut icon" href="../../adm/assets/images/favicon.png" type="image/x-icon">
   <title>Tourisme DZ - admin</title>
   <!-- Google font-->
   <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">
   @include('layouts.admin._stylesheet')
   @include('sweetalert::alert')

</head>

<body>


   <!-- pre-loader start -->
   {{-- <div class="loader-wrapper">
      <img src="../../adm/assets/images/loader/loader.gif" alt="loader gif">
   </div> --}}
   <!-- pre-loader End -->

   <!-- tap on top starts-->
   <div class="tap-top"><i data-feather="chevrons-up"></i></div>
   <!-- tap on tap ends-->
   <!-- page-wrapper Start-->
   <div class="page-wrapper compact-wrapper modern-type" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-header">
         <div class="header-wrapper row m-0">

            <div class="header-logo-wrapper col-auto p-0">
               <div class="logo-wrapper"><a href="index.html"><img class="img-fluid main-logo"
                        src="../../adm/assets/images/logo/logo.png" alt="logo">
                     <img class="img-fluid white-logo" src="../../adm/assets/images/logo/logo-white.png" alt="logo"></a>
               </div>
               <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle"
                     data-feather="align-center"></i>
               </div>
            </div>


            <div class="nav-right col-4 pull-right right-header p-0">
               <ul class="nav-menus">

                  <li>
                     <div class="mode"><i class="fa fa-moon-o" aria-hidden="true"></i>
                     </div>
                  </li>


                  <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                           data-feather="maximize"></i></a></li>
                  <li class="profile-nav onhover-dropdown pe-0 me-0">
                     <div class="media profile-media">
                        <img class="user-profile rounded-circle" src="../../adm/assets/images/users/4.jpg"
                           alt="profile-picture">
                        <div class="user-name-hide media-body"><span> {{auth()->user()->name}} </span>
                           <p class="mb-0 font-roboto">{{auth()->user()->user_type}} <i
                                 class="middle fa fa-angle-down"></i></p>
                        </div>
                     </div>
                     <ul class="profile-dropdown onhover-show-div">
                        <li>
                           <form action="{{route('logout')}}" method="POST">
                              @csrf
                              <button type="submit" class="btn btn-link d-flex">
                                 <i data-feather="log-out"> </i>
                                 <span>Déconnect </span></a>
                              </button>
                           </form>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
            <script class="result-template" type="text/x-handlebars-template">
               <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">adminn</div>
            </div>
            </div>
        </script>
            <script class="empty-template" type="text/x-handlebars-template">
               <div class="EmptyMessage">Votre recherche a donné 0 résultats. Cela signifie très probablement que le backend est en panne, beurk !</div>
            </script>
         </div>
      </div>
      <!-- Page Header Ends -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
         <!-- Page Sidebar Start-->
         @include('layouts.admin.sidebare')
         <!-- Page Sidebar Ends-->
         @yield('content')
      </div>

   </div>
   <!-- Modal -->
   <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog  modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-body">
               <h5 class="modal-title" id="staticBackdropLabel">Déconnecter</h5>
               <p>Êtes-vous sûr de vouloir vous déconnecter?</p>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               <div class="button-box">
                  <button type="button" class="btn btn--no " data-bs-dismiss="modal">Non</button>
                  <button type="button" class="btn  btn--yes btn-primary">Oui</button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- <div class="customizer-links"></div> -->
   @include('layouts.admin._script')

   <!-- login js-->
   <!-- Plugin used-->
</body>

</html>