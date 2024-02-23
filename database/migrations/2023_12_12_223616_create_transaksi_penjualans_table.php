<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiPenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_penjualan', function (Blueprint $table) {
            $table->id();
            $table->string('notrans',10);
            $table->date('tgltrans');
            $table->integer('jumlah'); // Jumlah obat yang dijual dalam transaksi
            $table->decimal('harga', 15, 2); // Harga total transaksi
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
        Schema::dropIfExists('transaksi_penjualans');
    }

    public function detailTransaksi()
{
    return $this->hasMany('App\TransaksiPenjualanDet', 'transaksi_penjualan_id');
}

}
