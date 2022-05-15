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
                <a href="{{route('hotels.create')}}" class="btn btn-theme"> <i data-feather="plus-square"></i>Ajouter un Hotel
                </a>
              </form>
            </div>

            <div class="card-body">
              <div>
                <div class="all-hotel-table table-responsive table-desi">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Nom</th>
                        <th>Téléphone</th>
                        <th>Type</th>
                        <th># chambre</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      @forelse ($hotels as $hotel)
                      <tr>
                        <td> {{ $loop->iteration }} </td>
                        <td style="">
                          <img src="{{asset('/storage/hotels/' . $hotel->image)}}" alt="" style="max-width: 20%;margin-right:12px; border-type:rounded">
                          <span> {{$hotel->nom}}  </span>
                        </td>
                        <td> {{$hotel->telephone}}  </td>
                        <td> {{$hotel->type}}  </td>
                        <td> {{$hotel->nombre_chambre}}  </td>
                        
                        <td class="">
                          <a href="javascript:void(0)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                          <a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true" style="font-size:1.3rem"></i></a>
                        </td>
                       
                      </tr>    
                      @empty
                          <tr style="text-align: center; font-weight:bold; font-size:1rem">
                            <td colspan="6"> Aucun hotels n'exite pour le moment. </td>
                          </tr>
                      @endforelse

                    </tbody>
                  </table>
                </div>
              </div>
            </div>

           {{ $hotels->links('vendor.pagination.bootstrap') }}

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