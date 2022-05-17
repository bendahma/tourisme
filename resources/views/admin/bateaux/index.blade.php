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
                            <h5>Liste des bateaux</h5>
                        </div>
                        <form class="d-inline-flex">
                            <a href="{{route('bateaux.create')}}" class="btn btn-theme"> <i data-feather="plus-square"></i>Ajouter un bateau </a>
                        </form>
                    </div>

                    <div class="card-body">
                        <div>
                            <div class=" table-responsive table-desi">
                                <table class="all-cars-table table table-striped">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Nom du bateau</th>
                                            <th>Max personnes</th>
                                            <th>Prix</th>
                                            <th>Lieu Départ</th>
                                            <th>lieu Arrivée</th>
                                            <th>Date Départ</th>
                                            <th>Date Arrivée</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bateaux as $bateau)
                                        <tr>
                                            <td>
                                                {{$loop->iteration}}
                                            </td>
                                            <td> <img src="{{asset('/storage/bateaux/' . $bateau->image)}}" alt="" style="max-width:30%;margin-right:12px; border-type:rounded"> {{$bateau->nom}}    </td>
                                            <td> {{$bateau->max_perso}}</td>
                                            <td> {{$bateau->prix}}</td>
                                            <td> {{$bateau->lieu_depart}}</td>
                                            <td> {{$bateau->lieu_arrivee}}</td>
                                            <td> {{$bateau->date_depart}}</td>
                                            <td> {{$bateau->date_arrivee}}</td>

                                            <td class="d-flex align-items-center justify-content-between">
                                                <a href="{{route('bateaux.edit',$bateau->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                <form action="{{route('bateaux.destroy',$bateau->id)}}" method="post" >
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" style="color:red; font-size:1.2rem; background-color:transparent; border:0;">
                                                        <i class="fa fa-trash-o text-danger " aria-hidden="true" style="font-size:1.3rem"></i>
                                                    </button> 
                                                </form>                                            
                                            </td>
                                           
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                   {{$bateaux->links('vendor.pagination.bootstrap')}}

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