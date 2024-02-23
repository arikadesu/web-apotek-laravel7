<!DOCTYPE html>
<html>
<head>
    <title>Laporan Transaksi Penjualan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Laporan Transaksi Penjualan</h2>
        <p>Periode: {{ $periode }}</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nomor Transaksi</th>
                <th>Tanggal Transaksi</th>
                <th>Nama Obat</th>
                <th>Jumlah</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksipenjualan as $transaksi)
                <tr>
                    <td>{{ $transaksi->notrans }}</td>
                    <td>{{ $transaksi->tgltrans }}</td>
                    <td>{{ $transaksi->nmobat }}</td> 
                    <td>{{ $transaksi->jumlah }}</td>
                    <td>{{ number_format($transaksi->harga, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div style="text-align: right; margin-top: 10px;">
        <strong>Total: {{ number_format($totalPrice, 2) }}</strong>
    </div>
</body>
</html>