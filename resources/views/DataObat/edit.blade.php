@extends('layouts.layout')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Data Obat</h1>
</div>
<hr>

<div class="card shadow mb-4">
    <div class="card-body">
        <form method="POST" action="{{ route('dataobat.update', $dataobat->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="kdobat">Kode Obat</label>
                <input type="text" name="kdobat" id="kdobat" class="form-control" value="{{ $dataobat->kdobat }}" required>
            </div>
            <div class="form-group">
                <label for="nmobat">Nama Obat</label>
                <input type="text" name="nmobat" id="nmobat" class="form-control" value="{{ $dataobat->nmobat }}" required>
            </div>
            <div class="form-group">
                <label for="stok">Stok Obat</label>
                <input type="number" name="stok" id="stok" class="form-control" value="{{ $dataobat->stok }}" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" class="form-control" value="{{ $dataobat->harga }}" required>
            </div>
            <div class="form-group">
            <button type="submit" class="btn" style="background-color: #589507; border-color: #589507; color: #fff;">Simpan Perubahan</button>
                <a href="{{ route('dataobat.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection
