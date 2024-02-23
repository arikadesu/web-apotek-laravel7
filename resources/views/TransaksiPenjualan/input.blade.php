@extends('layouts.layout')

@section('content')
<form action="{{ route('transaksipenjualan.store') }}" method="POST">
    @csrf
    <fieldset>
        <div class="form-group row">
            <div class="col-md-5">
                Nomor Transaksi<input id="notrans" type="text" name="notrans" class="form-control" value="{{ $nomor }}" required>
            </div>
            <div class="col-md-5">
                Tanggal Transaksi<input id="tgltrans" type="date" name="tgltrans" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-10">
                Keterangan<textarea id="keterangan" name="keterangan" class="form-control" required></textarea>
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <div class="col-md-6">
                Obat
                @for($i=1;$i<=3;$i++)
                    <select id="obat_id{{$i}}" name="obat_id{{$i}}" class="form-control">
                        <option value="">--Pilih Obat--</option>
                        @foreach ($dataobat as $dtob)
                            <option value="{{$dtob->id}}">{{$dtob->kdobat}} | {{$dtob->nama_obat}}</option>
                        @endforeach
                    </select>
                @endfor
            </div>
            <div class="col-md-4">
                Jumlah
                @for($i=1;$i<=3;$i++)
                    <input id="jumlah{{$i}}" type="number" name="jumlah{{$i}}" class="form-control" value="0" onkeyup="sum();">
                @endfor
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-10">Total Harga
                <input id="totalharga" type="text" name="totalharga" class="form-control" required readonly>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-10">
                <input type="submit" class="btn btn-success btn-send" value="Simpan">
                <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
            </div>
        </div>
        <hr>
    </fieldset>
</form>
<script>
    function fetchHargaObat(obatId, index) {
        fetch('/get-harga-obat/' + obatId)
            .then(response => response.json())
            .then(data => {
                const harga = data.harga;
                document.getElementById('obat_id' + index).setAttribute('data-harga', harga);
                updateTotalHarga();
            })
            .catch(error => console.error('Error:', error));
    }

    function updateTotalHarga() {
        let total = 0;
        for (let i = 1; i <= 3; i++) {
            const obatSelect = document.getElementById('obat_id' + i);
            const jumlah = document.getElementById('jumlah' + i).value;
            const harga = obatSelect.getAttribute('data-harga') || 0;
            total += jumlah * harga;
        }
        document.getElementById('totalharga').value = total;
    }

    // Menambahkan event listener untuk setiap select obat
    for (let i = 1; i <= 3; i++) {
        document.getElementById('obat_id' + i).addEventListener('change', function() {
            const obatId = this.value;
            fetchHargaObat(obatId, i);
        });

        document.getElementById('jumlah' + i).addEventListener('input', updateTotalHarga);
    }

</script>
@endsection
