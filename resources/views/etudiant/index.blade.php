@extends('layouts.base')
@section('content')
           <!--begin::App Content Header-->
           <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
              <!--begin::Row-->
              <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Liste des etudiants</h3></div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item active" aria-current="page">Unfixed Layout</li>
                  </ol>
                </div>
              </div>
              <!--end::Row-->
            </div>
            <!--end::Container-->
          </div>
          <!--end::App Content Header-->
          <!--begin::App Content-->
          <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
              <!--begin::Row-->
              <div class="app-content">
                <!--begin::Container-->
                <div class="container-fluid">
                  <!--begin::Row-->
                  <div class="row">
                    <div class="col-md-12">
                      <div class="card mb-4">
                        <div class="card-header">
                          <a href="{{route('Etudiant.create')}}" class="btn btn-primary">Ajouter un etudiant</a>
                          </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                          @session('delete')
                          <div class="alert alert-success" role="alert">
                              {{session('delete')}}
                            </div>
                              
                          @endsession
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th style="width: 10px">#</th>
                                <th>Prenom</th>
                                <th>Nom</th>
                                <th>Date de naissance</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse($etudiants as $etudiant)
                                <tr class="align-middle">

                                  <td>{{$etudiant->id}}.</td>
                                  <td>{{$etudiant->prenom}}</td>
                                  <td>{{$etudiant->nom}}</td>
                                  <td>{{$etudiant->date_naissance}}</td>
                                  <td>
                                    <a href="{{route('Etudiant.edit', $etudiant->id)}}" class="btn btn-outline-primary">Modifier</a>

                                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal{{$etudiant->id}}">
                                      Supprimer
                                    </button>
                                    
                                  </td>
                                </tr>
                                 <!-- Modal -->
                                      <div class="modal fade" id="deleteModal{{$etudiant->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer</h1>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                              Voulez vous vraiment supprimer cet étudiant ?
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                              <form  action="{{route('Etudiant.delete',$etudiant->id)}}"  method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger">Confirmer</button>
                                              </form>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                              @empty
                                <tr>
                                  <td colspan="5">Aucun étudiant trouvé.</td>
                                </tr>
                                  
                              @endforelse


                            </tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                          {{$etudiants->links('pagination::bootstrap-5')}}
                        </div>
                      </div>

                    </div>

                  </div>
                  <!--end::Row-->
                </div>
                <!--end::Container-->
              </div>
            </div>
          </div>
          <!--end::App Content--> 

@endsection