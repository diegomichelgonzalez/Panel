@extends('layouts.main')

@section('title','Editar Conta')

@section('content')

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Alterando a senha de... {{ $edit->name }}!</h5>
                                @can('admin')
                                    <p class="mb-4">Você tem privilégio de administrador</p>
                                @elsecan('publisher')
                                    <p class="mb-4">Você tem privilégio de publisher</p>
                                @endcan.
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- inicio dos containers do Transações -->
            <div class="col-md-6 col-lg-6 order-2 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <i class="menu-icon tf-icons bx bx-grid"></i>
                        <h5 class="card-title m-0 me-2">Alterar a senha</h5>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                <a class="dropdown-item" href="javascript:void(0);">Mudar a Senha</a>
                                <a class="dropdown-item" href="javascript:void(0);">Volatr</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/update-conta/{{ $edit->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name" class="control-label">Nomes</label>
                                <input type="name" class="form-control" name="name" value="{{ $edit->name }}" >
                            </div>
                            <div class="form-group">
                                <label for="email" class="control-label">Email</label>
                                <input type="text" class="form-control" name="email" value="{{ $edit->email }}">
                            </div>
                            <br>
                            <div class="form-group clearfix">
                                <button type="submit" class="btn btn-info">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- fianl dos containers do Transações -->
        </div>
    </div>  
    <!-- / Content -->

 @endsection