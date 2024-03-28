@extends('layouts.index')

@section('title', '| Detail Penjualan')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Detail Penjualan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Beranda</a></li>
                    <li class="breadcrumb-item active">Detail Penjualan</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body justify-content-beetwen ">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('pembelian') }}" class="btn btn-primary mb-3 " style="margin-right: 66%">Unduh Penjualan</a>
                            <a href="{{route('formpembelian')}}" class="btn btn-danger mb-3"> Tambah Penjualan</a>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Total Harga</th>
                                    <th>Dibuat oleh</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <th>
                                            <a href="" class="btn btn-primary" >lihat</a>
                                            <a href="" class="btn btn-danger">unduh bukti</a>
                                        </th>
                                    </tr>
                                    
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
