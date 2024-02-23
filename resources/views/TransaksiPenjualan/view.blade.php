@extends('layouts.layout')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Invoice Transaksi </h1>
</div>
<hr>
<div class="card mb-4">
    <div class="card-header">
        Detail Transaksi
    </div>
    <div class="card-body">
        <h5 class="card-title">Transaksi No: {{$transaksipenjualan->notrans}}</h5>
        <p class="card-text">Tanggal Transaksi: {{$transaksipenjualan->tgltrans}}</p>
        <p class="card-text">Total Jumlah Obat: {{$transaksipenjualan->jumlah}}</p>
        <p class="card-text">Total Harga: {{$transaksipenjualan->harga}}</p>
        
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Kode Obat</th>
                        <th>Nama Obat</th>
                        <th>Jumlah</th>
                        <th>Harga Satuan</th>
                        <th>Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksipenjualandets as $detail)
                    <tr>
                        <td>{{$detail->obat->kdobat}}</td>
                        <td>{{$detail->obat->nama_obat}}</td>
                        <td>{{$detail->jumlah}}</td>
                        <td>{{$detail->harga_satuan}}</td>
                        <td>{{$detail->total_harga}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
