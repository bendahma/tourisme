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
                     <a href="{{route('abonnes.create')}}" class="align-items-center btn btn-theme"> <i
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
                                 <th>Email</th>
                                 <th>N.R.C</th>
                                 <th></th>

                              </tr>
                           </thead>
                           <tbody>
                              @if ($abonnes->count() > 0)
                              @foreach ($abonnes as $a)
                              <tr>
                                 <td>
                                    {{$loop->iteration}}
                                 </td>
                                 <td class="d-flex align-items-center">
                                    <span>
                                       <img src="{{asset('adm/assets/images/users/1.jpg')}}" alt="users">
                                    </span>
                                    <span class="mx-3 ">
                                       {{$a->user->name}}
                                    </span>
                                 </td>
                                 <td>
                                    {{$a->telephone}}
                                 </td>
                                 <td>
                                    {{$a->user->email}}
                                 </td>
                                 <td>
                                    {{$a->registre_commerce}}
                                 </td>
                                 <td class="font-primary d-flex align-items-center">
                                    <a href="{{route('abonnes.edit',$a->id)}}">
                                       <i class="fa fa-pencil-square-o " aria-hidden="true"></i>
                                    </a>
                                    <form action="{{route('abonnes.destroy',$a->id)}}" method="POST">
                                       @csrf
                                       @method('DELETE')
                                       <button type="submit" class="btn" style="background-color:transparent"><i
                                             class="fa fa-trash-o text-danger" style="font-size: 1.3rem"
                                             aria-hidden="true"></i></button>
                                    </form>

                                 </td>

                              </tr>
                              @endforeach
                              @else
                              <tr>
                                 <td colspan="6">Aucun abonnes s'existe pour le moment.</td>
                              </tr>
                              @endif




                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               {{$abonnes->links('vendor.pagination.bootstrap')}}
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