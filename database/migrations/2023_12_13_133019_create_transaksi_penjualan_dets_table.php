<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiPenjualanDetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_penjualan_dets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaksi_penjualan_id');
            $table->foreign('transaksi_penjualan_id')->references('id')->on('transaksi_penjualan')->onDelete('cascade');
            $table->unsignedBigInteger('obat_id');
            $table->foreign('obat_id')->references('id')->on('data_obat')->onDelete('cascade');
            $table->integer('jumlah');
            $table->decimal('harga_satuan', 15, 2);
            $table->decimal('total_harga', 15, 2);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_penjualan_dets');
    }
}
