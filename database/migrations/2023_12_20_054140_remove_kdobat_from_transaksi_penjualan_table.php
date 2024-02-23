<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveKdobatFromTransaksiPenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaksi_penjualan', function (Blueprint $table) {
            $table->dropColumn('kdobat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaksi_penjualan', function (Blueprint $table) {
            $table->string('kdobat', 10)->nullable();
        });
    }
}
