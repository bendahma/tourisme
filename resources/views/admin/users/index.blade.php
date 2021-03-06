@extends('layouts.admin.master')



@section('content')


<div class="page-body">

   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12">
            <div class="card">
               <div class="card-header  card-header--2">

                  <div>
                     <h5>Liste users</h5>
                  </div>

                  <form class="d-inline-flex">
                     <a href="{{route('users.create')}}" class="align-items-center btn btn-theme"> <i
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
                                 <th>Nom & Prenom</th>
                                 <th>Email</th>
                                 <th>User type</th>
                                 <th></th>
                              </tr>
                           </thead>
                           <tbody>
                              @if ($users->count() > 0)
                              @foreach ($users as $user)
                              <tr>

                                 <td class="">
                                    <div class="mx-2">
                                       {{$loop->iteration}}
                                    </div>

                                 </td>
                                 <td class="d-flex align-items-center">
                                    <span>
                                       <img src="{{asset('adm/assets/images/users/1.jpg')}}" alt="users">
                                    </span>
                                    <div class="mx-3">
                                       {{$user->name}}
                                    </div>

                                 </td>

                                 <td> {{$user->email}} </td>

                                 <td> {{$user->user_type}} </td>

                                 <td class="font-primary d-flex align-items-center">
                                    {{-- <a href="" class="mx-2"><i class="fa fa-eye" aria-hidden="true"></i></a> --}}
                                    <a href="{{route('users.edit',$user->id)}}" class=""><i
                                          class="fa fa-pencil-square-o fa-2xl" aria-hidden="true"></i></a>
                                    <form action="{{route('users.destroy',$user->id)}}" method="POST">
                                       @csrf
                                       @method('DELETE')
                                       <button type="submit" style="color:red; font-size:1.2rem; background-color:transparent; border:0;" ><i class="fa fa-trash-o text-danger fa-3xl "
                                            aria-hidden="true"></i></button>
                                    </form>

                                 </td>
                              </tr>
                              @endforeach
                              @else
                              <tr style="text-align: center; font-weight:bold; font-size:1rem">
                                 <td colspan="5"> Aucun utilisateur s'existe pour le moment. </td>
                              </tr>
                              @endif







                           </tbody>
                        </table>
                        <div class="my-4 d-flex">
                           {{$users->links('vendor.pagination.bootstrap')}}
                        </div>
                     </div>
                  </div>
               </div>

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