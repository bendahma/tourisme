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
                <h5>Listes des voyages</h5>
              </div>
              <form class="d-inline-flex">
                <a href="{{route('voyages.create')}}" class="btn btn-theme"> 
                  <i data-feather="plus-square"></i>Nouveau voyage
                </a>
              </form>
            </div>

            <div class="card-body">
              <div>
                <div class="table-responsive table-desi">
                  <table class=" table table-striped all-package">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Titre</th>
                        <th>Destination</th>
                        <th>Personne</th>
                        <th>Durée</th>
                        <th >Prix  </th>
                        <th>Date Départ</th>
                        <th>Date Fin</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @if ($voyages->count()>0)
                      @foreach ($voyages as $voyage)
                      <tr>
                        <th>
                          {{$loop->iteration}}
                        </th>
                        <td class="d-flex "> 
                          <img src="{{asset('/storage/voyages/' . $voyage->image)}}" alt="" style="max-width:35%;margin-right:12px; border-type:rounded">
                          {{$voyage->titre}} </td>
                        <td> 
                          {{$voyage->destination}} </td>
                        <td> {{$voyage->max_perso}} </td>
                        <td> {{$voyage->duree}} </td>
                        <td > {{number_format($voyage->prix,2,'.',' ')}} DA</td>
                        <td> {{$voyage->date_depart}} </td>
                        <td> {{$voyage->date_arrivee}} </td>
     
                        <td class="font-primary d-flex align-items-center">
                          <a href="{{route('voyages.edit',$voyage->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                          <form method="POST" action="{{route('voyages.destroy',$voyage->id)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn" style="background-color:transparent"> 
                              <i class="fa fa-trash-o text-danger" style="font-size: 1.3rem" aria-hidden="true"></i>
                            </button>
                          </form>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                      </tr>
                      @endforeach
                      @else
                      <tr style="text-align: center; font-weight:bold; font-size:1rem">
                        <td colspan="8"> Aucun voyage existe pour le moment. </td>
                      </tr>
                      @endif
                      
                     
                      
                
                    </tbody>
                  </table>
                  
                </div>
              </div>
            </div>

            {{$voyages->links('vendor.pagination.bootstrap')}}


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