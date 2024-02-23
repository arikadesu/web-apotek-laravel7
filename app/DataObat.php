<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataObat extends Model
{
    protected $table = "data_obat";
    protected $fillable = [
    'id', 'kdobat', 'nmobat', 'stok', 'harga'
    ];

    public function transaksiPenjualanDet()
    {
        return $this->hasMany(TransaksiPenjualanDet::class, 'obat_id');
    }

}
