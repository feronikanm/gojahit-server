<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjahitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjahit', function (Blueprint $table) {
            $table->increments('id_penjahit');
            $table->string('nama_penjahit')->nullable();
            $table->string('email_penjahit')->unique();
            $table->string('password_penjahit');
            $table->string('telp_penjahit')->nullable();
            $table->string('nama_toko')->nullable();
            $table->text('keterangan_toko')->nullable();
            $table->string('latitude_penjahit')->nullable();
            $table->string('longitude_penjahit')->nullable();
            $table->text('alamat_penjahit')->nullable();
            $table->string('spesifikasi_penjahit')->nullable();
            $table->string('jangkauan_kategori_penjahit')->nullable();
            $table->string('hari_buka')->nullable();
            $table->time('jam_buka')->nullable();
            $table->time('jam_tutup')->nullable();
            $table->text('foto_penjahit')->nullable();    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjahit');
    }
}
