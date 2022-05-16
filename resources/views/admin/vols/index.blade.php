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
                            <h5>Liste des vols</h5>
                        </div>
                        <form class="d-inline-flex">
                            <a href="{{route('vols.create')}}" class="btn btn-theme"> 
                                <i data-feather="plus-square"></i>
                                Ajouter un vol
                            </a>
                        </form>
                    </div>

                    <div class="card-body">
                        <div>
                            <div class="table-responsive table-desi">
                                <table class="all-restaurant-table table table-striped">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Nom companie</th>
                                            <th>Date Départ</th>
                                            <th>Date Arrivée</th>
                                            <th>Lieu debart</th>
                                            <th>Lieu arrive</th>
                                            <th>Classage Vol</th>
                                            <th>Prix</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($vols as $vol)
                                            
                                        
                                        <tr>
                                            <td> {{$loop->iteration}}</td>
                                            <td> {{$vol->nom_compagne}}</td>
                                            <td> {{$vol->date_debart}}</td>
                                            <td> {{$vol->date_arrive}}</td>
                                            <td> {{$vol->lieu_debart}}</td>
                                            <td> {{$vol->lieu_arrive}}</td>
                                            <td> {{$vol->classage_vol}}</td>
                                            <td> {{number_format($vol->prix,2,'.',' ')}}</td>


                                            <td class="d-flex align-items-center justify-content-center ">
                                                <a href="{{route('vols.edit',$vol->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                <form action="{{route('vols.destroy',$vol->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" style="color:red; mx-2; font-size:1.2rem; background-color:transparent; border:0;"> <i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                                                </form>
                                            </td>
                                          
                                        </tr>
                                        @empty
                                        <tr style="text-align: center; font-size:1rem; font-weight:bold">
                                            <td colspan="8"> Aucun vol se trouve pour le moments </td>
                                        </tr>
                                        @endforelse
                                       
                                       
                                         
                                         
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    {{ $vols->links('vendor.pagination.bootstrap') }}


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