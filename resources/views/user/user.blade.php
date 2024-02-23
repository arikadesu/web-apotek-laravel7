@extends('layouts.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Pengguna</h1>
</div>
<hr>
<div class="card-header py-3" align="right">
    <a href="{{ route('user.create') }}" class="d-none d-sm-inline-block btn btn-sm shadow-sm" style="background-color: #8cb27f; color: white;">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah 
    </a>
</div>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr align="center">
                        <th width="15%">User Name</th>
                        <th width="15%">Nama</th>
                        <th width="20%">Email</th>
                        <th width="15%">Roles</th>
                        <th width="15%">Status</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $usr)
                    <tr>
                        <td>{{$usr->username}}</td>
                        <td>{{$usr->name}}</td>
                        <td>{{$usr->email}}</td>
                        <td>{{$usr->roles}}</td>
                        <td>{{$usr->status}}</td>
                        <td align="center">
                            <a href="{{route( 'user.edit' ,[$usr->id])}}" class="btn btn-sm shadow-sm" style="background-color: #e0e354; color: white;">
                                <i class="fas fa-edit fa-sm text-white-50"></i> Edit
                            </a>
                            <a href="/user/hapus/{{ $usr->id }}" onclick="return confirm('Yakin Ingin menghapus data?')" class="btn btn-sm shadow-sm" style="background-color: #a79ba7; color: white;">
                                <i class="fas fa-trash-alt fa-sm text-white-50"></i> Hapus
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection