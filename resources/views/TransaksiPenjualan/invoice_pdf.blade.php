<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice {{ $transaksi->notrans }}</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table, .table th, .table td {
            border: 1px solid black;
        }
        .table th, .table td {
            padding: 5px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Invoice Transaksi</h2>
    </div>

    <p><strong>Nomor Transaksi:</strong> {{ $transaksi->notrans }}</p>
    <p><strong>Tanggal Transaksi:</strong> {{ $transaksi->tgltrans }}</p>

    <table class="table">
        <thead>
            <tr>
                <th>Nama Obat</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksi->detailTransaksi as $detail)
                <tr>
                    <td>{{ $detail->obat->nmobat }}</td>
                    <td>{{ $detail->jumlah }}</td>
                    <td>{{ $detail->harga_satuan }}</td>
                    <td>{{ $detail->total_harga }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p>Total: {{ $transaksi->harga }}</p>
</body>
</html>

