@extends('layouts.index')

@section('title', '| Form User')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Form User</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user') }}">User</a></li>
                    <li class="breadcrumb-item active">Form User</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-primary">
                <form action="{{ isset($user) ? route('user.edit.update', $user->id) : route('user.tambah.store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (isset($user))
                    @method('PATCH')
                    @endif
                    <div class="card-body">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                value="{{ isset($user) ? $user->email : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input type="text" class="form-control" id="harga" name="name"
                                value="{{ isset($user) ? $user->name : '' }}">
                        </div>
                        <div class="form-floating mt-3 mb-3">
                            <label for="role">Role</label>
                            <select class="form-control" name="role">
                                <option value="admin">Admin</option>
                                <option value="petugas">Petugas</option>
                                value="{{ isset($user) ? $user->role : '' }}">

                            </select>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password"
                                    value="{{ isset($user) ? $user->password : '' }}">
                            </div>

                        </div>
                        <div class="card-footer">
                            <a href="{{ route('user') }}" class="btn btn-warning">Batal</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
