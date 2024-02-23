@extends('layouts.layout')
@section('content') 
<div class="table-responsive">
    <table class="table table-bordered" id="detailTable" width="100%" cellspacing="0">
        <thead>
            <tr align="center">
                <th width="50%">Nama Obat</th>
                <th width="50%">Jumlah</th>
            </tr>
        </thead>
        <tbody> 
        @foreach ($transaksi->detailTransaksi as $detail)
                <tr align="center">
                    <td>{{ $detail->obat->nmobat }}</td>
                    <td>{{ $detail->jumlah }}</td>
                </tr>
            @endforeach 
        </tbody>
    </table>
</div>
@endsection
