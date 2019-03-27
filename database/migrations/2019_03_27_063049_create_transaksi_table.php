<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_transaksi',45);
            $table->integer('id_users');
            $table->integer('id_event');
            $table->integer('id_venue');
            $table->date('tgl_sewa');
            $table->date('tgl_selesai');
            $table->double('total_pembayaran');
            $table->string('bukti_pembayaran',200);
            $table->string('status',45);            
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
        Schema::dropIfExists('transaksi');
    }
}
