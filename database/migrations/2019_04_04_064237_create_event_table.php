<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->increments('id_event');
            $table->integer('id');
            $table->integer('id_venue');
            $table->string('nama_event',200);
            $table->string('jenis',75);
            $table->text('deskripsi_event');
            $table->date('waktu_event');
            $table->string('pemateri',75);
            $table->string('image_event',125);
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
        Schema::dropIfExists('event');
    }
}
