@extends('layouts.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Obat</h1>
</div>
<hr>
<div class="card-header py-3" align="right">
    <a href="{{route('dataobat.create')}}" class="d-none d-sm-inline-block btn btn-sm shadow-sm" style="background-color: #8cb27f; color: white;">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah 
    </a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr align="center">
                        <th width="20%">Kode Obat</th>
                        <th width="25%">Nama Obat</th>
                        <th width="20%">Stok Obat</th>
                        <th width="20%">Harga</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataobat as $dtob)
                    <tr>
                        <td>{{$dtob->kdobat}}</td>
                        <td>{{$dtob->nmobat}}</td>
                        <td>{{$dtob->stok}}</td>
                        <td>{{$dtob->harga}}</td>
                        <td align="center">
                            <a href="{{route( 'dataobat.edit' ,[$dtob->id])}}" class="btn btn-sm shadow-sm" style="background-color: #e0e354; color: white;">
                                <i class="fas fa-edit fa-sm text-white-50"></i> Edit
                            </a>
                            <a href="/dataobat/hapus/{{ $dtob->id }}" onclick="return confirm('Yakin Ingin menghapus data?')" class="btn btn-sm shadow-sm" style="background-color: #a79ba7; color: white;">
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