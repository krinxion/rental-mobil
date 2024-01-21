@extends('layouts-sb-admin-2.app')
@section('title', 'Transaksi')
@section('transaksi-active', 'active')
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>

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
            <h6 class="m-0 font-weight-bold text-primary">Table Transaksi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Perental</th>
                            <th>Merk Mobil</th>
                            <th>Mobil Dirental</th>
                            <th>Warna Mobil</th>
                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Nama Perental</th>
                            <th>Merk Mobil</th>
                            <th>Mobil Dirental</th>
                            <th>Warna Mobil</th>
                            
                        </tr>
                    </tfoot>
                    <tbody>
                            @foreach($transaksi as $transaksi)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$transaksi->user->name}}</td>
                                <td>{{$transaksi->mobil->merk->merk}}</td>
                                <td>{{$transaksi->mobil->nama_mobil}}</td>
                                <td>{{$transaksi->mobil->warna_mobil}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection