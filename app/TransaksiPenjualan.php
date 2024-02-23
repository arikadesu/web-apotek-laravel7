<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiPenjualan extends Model
{
    protected $table = "transaksi_penjualan";
    protected $fillable = [
        'notrans', 'tgltrans', 'jumlah', 'harga'
    ];    
    // Definisi relasi ke TransaksiPenjualanDet
    public function detailTransaksi()
    {
        return $this->hasMany(TransaksiPenjualanDet::class, 'transaksi_penjualan_id', 'id');
    }
}
