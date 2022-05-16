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
                <h5>Liste des hotels</h5>
              </div>
              <form class="d-inline-flex">
                <a href="{{route('chambres.create')}}" class="btn btn-theme"> <i data-feather="plus-square"></i>Ajouter un Chambre
                </a>
              </form>
            </div>

            <div class="card-body">
              <div>
                <div class="all-hotel-table  table-desi">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th></th>
                        <th style="max-width: 10%">Type</th>
                        <th>Nombre personne</th>
                        <th>Prix</th>
                        <th>Disponible</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      @forelse ($chambres as $chambre)
                      <tr>
                        <td> {{ $loop->iteration }} </td>
                        <td style="max-width:10%">
                          <img src="{{asset('/storage/chambres/' . $chambre->image)}}" alt="" style="max-width:10%;margin-right:12px; border-type:rounded">
                          <span> {{$chambre->type_chambre}}  </span>
                        </td>
                        <td> {{$chambre->nombre_personne}}  </td>
                        <td> {{$chambre->prix}}  </td>
                        <td> {{$chambre->disponible == true ? 'Disponible' : 'Reserve'}}  </td>
                        
                        <td class="">
                          <a href="{{route('chambres.edit',$chambre->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                          <form action="{{route('chambre.destroy',$chambre->id)}}" method="post" >
                              @csrf
                              @method('DELETE')
                              <button type="submit" style="background-color: transparent"><i class="fa fa-trash-o text-danger " aria-hidden="true" style="font-size:1.3rem;background-color:transparent"></i></button> 
                          </form>
                        </td>
                       
                      </tr>    
                      @empty
                          <tr style="text-align: center; font-weight:bold; font-size:1rem">
                            <td colspan="6"> Aucun chambre n'exite pour le moment. </td>
                          </tr>
                      @endforelse

                    </tbody>
                  </table>
                </div>
              </div>
            </div>

           {{ $chambres->links('vendor.pagination.bootstrap') }}

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