@extends('layouts.main')

@section('title','Lista de Usuarios')

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-12">
                            <div class="card-body">
                                <h3 class="card-title text-primary">Ben-vido {{ Auth::user()->name }}! </h3>
                                <p class="h5">Apenas o administrador tem acesso à lista de usuários cadastrados no sistema.</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Striped Rows -->
                            <div class="card">
                                <h5 class="card-header">Lista do usuarios cadastrados</h5>
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Perfil</th>
                                                <th>Nome</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            @foreach($users as $user)
                                            <tr>
                                                <td>
                                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                        <li data-bs-toggle="tooltip"  data-popup="tooltip-custom" data-bs-placement="top"  class="avatar avatar-xs pull-up" title="{{$user->name}}">
                                                            <img src="../uploads/{{$user->image}}" alt="Sem foto" class="rounded-circle"/>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <strong>{{$user->name}}</strong>
                                                </td>
                                                <td>{{$user->email}}</td>
                                                <td>
                                                    <span class="badge bg-label-primary me-1">Active</span>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="/edit-conta/{{$user->id}}">
                                                                <i class="bx bx-edit-alt me-1"></i> 
                                                                Edit
                                                            </a>
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <i class="bx bx-dna"></i> Alterar permissão
                                                            </a>
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <i class="bx bx-trash me-1"></i> Desativar
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--/ Striped Rows -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <!-- / Content -->
    
@endsection
                    