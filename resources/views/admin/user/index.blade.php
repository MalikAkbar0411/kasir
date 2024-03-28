
@section('content')

@extends('layouts.index')

@section('title', '| Detail User')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Detail User</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Beranda</a></li>
                    <li class="breadcrumb-item active">Detail User</li>
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
                    <div class="card-body">
                        <a href="{{ route('formuser') }}" class="btn btn-primary mb-3">Tambah User</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>mail</th>
                                    <th>nama</th>
                                    <th>role</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->name}}</td>
                                        <td>{{ $item->role }}</td>
                                        <th>
                                            <a href="{{ route('user.edit', $item->id) }}" class="btn btn-primary" >edit</a>
                                            <a href="{{ route('user.hapus', $item->id) }}" class="btn btn-danger">hapus</a>
                                        </th>
                                    </tr>
                                    @endforeach
                                    
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
