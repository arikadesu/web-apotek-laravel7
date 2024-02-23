@extends('layouts.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Transaksi Penjualan Obat</h1>
</div>
<hr>
<div class="card-header py-3" align="right">
    <a href="{{ route('transaksipenjualan.create') }}" class="d-none d-sm-inline-block btn btn-sm shadow-sm" style="background-color: #8cb27f; color: white;">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
    </a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr align="center">
                        <th width="15%">Nama Obat</th>
                        <th width="20%">Nomor Transaksi</th>
                        <th width="20%">Tanggal Transaksi</th>
                        <th width="10%">Jumlah</th>
                        <th width="20%">Harga</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksipenjualan as $tpo)
                    <tr>
                        <td>
                            {{ $tpo->nmobat }}
                            <a href="/transaksipenjualan/detail/{{ $tpo->id }}" class="btn btn-sm shadow-sm" style="background-color: #589507; color: white;">
                                <i class="fas fa-eye fa-sm text-white-50"></i> Detail
                            </a>
                        </td>

                        <td>{{ $tpo->notrans }}</td>
                        <td>{{ $tpo->tgltrans }}</td>
                        <td>{{ $tpo->jumlah }}</td>
                        <td>{{ $tpo->harga }}</td>
                        <td align="center">
                            <a href="{{ route('transaksipenjualan.show', [$tpo->id]) }}" class="btn btn-sm shadow-sm" style="background-color: #e0e354; color: white;">
                                <i class="fas fa-file-invoice fa-sm text-white-50"></i> Invoice
                            </a>
                            <a href="/transaksipenjualan/hapus/{{ $tpo->id }}" onclick="return confirm('Yakin Ingin menghapus data?')" class="btn btn-sm shadow-sm" style="background-color: #a79ba7; color: white;">
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