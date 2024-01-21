@extends('layouts-sb-admin-2.app')
@section('title', 'merk-mobil')
@section('master-data-show', 'show')
@section('merk-mobil-active', 'active')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kategori</h1>

    </div>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" arial-label="close">
                <span aria-hidden="true">x</span>
            </button>
            <h6><i class="fas fa-check"></i><b>Success!</b></h6>
            {{ session('success')}}!
        </div>
    @endif
    @include('master-data.merk-mobil.create-merk-mobil')
   <div class="m-2">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addMerk">
        <i class="fas fa-fw fa-plus"></i>Add Merk
        </button>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Table Kategori</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Merk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Merk</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($merk as $merk)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$merk->merk}}</td>
                                <td>
                                @include('master-data.merk-mobil.edit-merk-mobil')
                                <a href="#"
                                        class="btn btn-warning btn-sm"
                                        data-toggle="modal" data-target="#editMerk{{$merk->id}}">
                                        <i class="fas fa-fw fa-edit"></i> Edit</a>
                                <a href="{{route('merk-mobil.delete',$merk->id)}}"
                                        onclick="return confirm('Anda ingin menghapus kategori ini?')"
                                        class="btn btn-danger btn-sm">
                                        <i class="fas fa-fw fa-trash"></i> Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection