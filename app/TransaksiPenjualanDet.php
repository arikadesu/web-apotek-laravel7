<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiPenjualanDet extends Model
{
    protected $table = 'transaksi_penjualan_dets';

    protected $fillable = [
        'transaksi_penjualan_id',
        'obat_id',
        'jumlah',
        'harga_satuan',
        'total_harga'
    ];
    public function obat()
    {
        return $this->belongsTo(DataObat::class, 'obat_id');
    }
}