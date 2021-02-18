<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->increments('id_pesanan');
            $table->integer('id_pelanggan')->unsigned();
            $table->integer('id_penjahit')->unsigned();
            $table->timestamp('tanggal_pesanan');
            $table->date('tanggal_pesanan_selesai')->nullable();
            $table->string('lama_waktu_pengerjaan')->nullable();
            $table->string('status_pesanan')->nullable();
        });


        Schema::table('pesanan', function($table){
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggan')->onUpdate('cascade')->onDelete('cascade');;
            $table->foreign('id_penjahit')->references('id_penjahit')->on('penjahit')->onUpdate('cascade')->onDelete('cascade');;            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
}
