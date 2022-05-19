@extends('layouts.admin.master')
@section('content')
<div class="page-body">

   <!-- Container-fluid starts-->
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12">
            <div class="card">
               <div class="card-header  card-header--2">

                  <div>
                     <h5>Liste abonnés</h5>
                  </div>

                  <form class="d-inline-flex">
                     <a href="{{route('clients.create')}}" class="align-items-center btn btn-theme"> <i
                           data-feather="plus-square"></i>Ajouter nouveau
                     </a>
                  </form>

               </div>

               <div class="card-body">
                  <div>
                     <div class="table-responsive table-desi">
                        <table class="user-table table table-striped">
                           <thead>
                              <tr>
                                 <th></th>
                                 <th>Nom et prenom</th>
                                 <th>Téléphone</th>
                                 <th>Adresse</th>
                                 <th>Wilaya</th>
                                 <th></th>

                              </tr>
                           </thead>
                           <tbody>
                              @if ($clients->count() > 0)
                              @foreach ($clients as $client)
                              <tr>
                                 <td>
                                    {{$loop->iteration}}
                                 </td>
                                 <td class="d-flex align-items-center">
                                    <span>
                                       <img src="{{asset('adm/assets/images/users/1.jpg')}}" alt="users">
                                    </span>
                                    <span class="mx-3 ">
                                       {{$client->user->name}}
                                    </span>
                                 </td>
                                 <td>
                                    {{$client->telephone}}
                                 </td>
                                 <td>
                                    {{$client->adresse}}
                                 </td>
                                 <td>
                                    {{$client->wilaya}}
                                 </td>
                                 <td class="font-primary d-flex align-items-center">
                                    <a href="{{route('clients.edit',$client->id)}}">
                                       <i class="fa fa-pencil-square-o " aria-hidden="true"></i>
                                    </a>
                                    <form action="{{route('clients.destroy',$client->id)}}" method="POST">
                                       @csrf
                                       @method('DELETE')
                                       <button type="submit" class="btn" style="color:red; font-size:1.2rem; background-color:transparent; border:0;"><i
                                             class="fa fa-trash-o text-danger" style="font-size: 1.3rem"
                                             aria-hidden="true"></i></button>
                                    </form>

                                 </td>

                              </tr>
                              @endforeach
                              @else
                              <tr>
                                 <td colspan="6" class="" style=""> Aucun client s'existe pour le
                                    moment. </td>
                              </tr>
                              @endif




                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               {{$clients->links('vendor.pagination.bootstrap')}}
            </div>
         </div>

      </div>
   </div>

   <!-- Container-fluid Ends-->

   <div class="container-fluid">
      <!-- footer start-->
      <footer class="footer">

         <div class="row">
            <div class="col-md-12 footer-copyright text-center">
               <p class="mb-0">Copyright 2022 Tourisme DZ </p>
            </div>
         </div>

      </footer>
   </div>
</div>
@endsection