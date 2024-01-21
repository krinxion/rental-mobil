@extends('layouts-sb-admin-2.app')
@section('title', 'Mobil')
@section('master-data-show', 'show')
@section('mobil-active', 'active')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Mobil</h1>

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

    @include('master-data.mobil.create-mobil')
    <div class="m-2">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addMobil">
        <i class="fas fa-fw fa-plus"></i>Add Mobil
        </button>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Table Mobil</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Mobil</th>
                            <th>Merk Mobil</th>
                            <th>Warna Mobil</th>
                            <th>Foto Mobil</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Nama Mobil</th>
                            <th>Merk Mobil</th>
                            <th>Warna Mobil</th>
                            <th>Foto Mobil</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                            @foreach($mobil as $mobil)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$mobil->nama_mobil}}</td>
                                <td>{{$mobil->merk->merk}}</td>
                                <td>{{$mobil->warna_mobil}}</td>
                                <td>
                                    <img style="height:100px; width:120px" src="{{asset('/storage/'.$mobil->foto)}}" alt="">
                                    

                                </td>
                                <td>
                                @include('master-data.mobil.edit-mobil')
                                <a href="#"
                                        
                                        class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editMobil{{$mobil->id}}">
                                        <i class="fas fa-fw fa-edit"></i> Edit</a>
                                <a href="{{route('mobil.delete',$mobil->id)}}"
                                        onclick="return confirm('Anda ingin menghapus user ini?')"
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