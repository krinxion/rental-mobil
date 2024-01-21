@extends('layouts-sb-admin-2.app')
@section('title', 'Mobil')
@section('rental-mobil-active', 'active')
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
                            @foreach($rentals as $rental)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$rental->nama_mobil}}</td>
                                <td>{{$rental->merk->merk}}</td>
                                <td>{{$rental->warna_mobil}}</td>
                                <td>
                                    <img style="height:100px; width:120px" src="{{asset('/storage/'.$rental->foto)}}" alt="">
                                </td>
                                <td>
                                
                                
                                <a href="{{route('rental',$rental->id)}}"
                                        onclick="return confirm('Anda ingin merental mobil ini?')"
                                        class="btn btn-info btn-sm">
                                        <i class="fas fa-fw fa-plus"></i> Rental</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection