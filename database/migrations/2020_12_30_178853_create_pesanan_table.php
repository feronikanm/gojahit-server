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
            $table->integer('id_detail_kategori')->unsigned()->nullable();
            $table->timestamp('tanggal_pesanan');
            $table->date('tanggal_pesanan_selesai')->nullable();
            $table->string('lama_waktu_pengerjaan')->nullable();
            $table->text('catatan_pesanan')->nullable();
            $table->string('desain_jahitan')->nullable();
            $table->string('bahan_jahit')->nullable();
            $table->string('asal_bahan')->nullable();
            $table->integer('panjang_bahan')->unsigned()->nullable();
            $table->integer('lebar_bahan')->unsigned()->nullable();
            $table->string('status_bahan')->nullable();
            $table->double('harga_bahan')->unsigned()->nullable();
            $table->double('ongkos_penjahit')->unsigned()->nullable();
            $table->integer('jumlah_jahitan')->unsigned()->nullable();
            $table->integer('biaya_jahitan')->unsigned()->nullable();
            $table->double('total_biaya')->unsigned()->nullable();
            $table->string('status_pesanan')->nullable();
        });


        Schema::table('pesanan', function($table){
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_penjahit')->references('id_penjahit')->on('penjahit')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_detail_kategori')->references('id_detail_kategori')->on('detail_kategori')->onUpdate('cascade')->onDelete('cascade');            
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
