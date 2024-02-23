<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataObatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_obat', function (Blueprint $table) {
            $table->id();
            $table->string('kdobat',10);
            $table->string('nmobat',50);
             $table->integer('stok'); // Stok obat dalam integer
            $table->decimal('harga', 15, 2); // Harga obat dalam decimal
            $table->timestamps(); // Waktu pembuatan dan pembaruan obat
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_obats');
    }

    public function obat()
{
    return $this->belongsTo('App\DataObat', 'obat_id');
}
}
