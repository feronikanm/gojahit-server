<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        
        Schema::create('detail_kategori', function (Blueprint $table) {
            $table->increments('id_detail_kategori');
            $table->integer('id_penjahit')->unsigned()->nullable();
            $table->integer('id_kategori')->unsigned()->nullable();
            $table->text('keterangan_kategori')->nullable();
            $table->string('bahan_jahit')->nullable();
            $table->double('harga_bahan')->unsigned()->nullable();
            $table->double('ongkos_penjahit')->unsigned()->nullable();
            $table->string('perkiraan_lama_waktu_pengerjaan')->nullable();
        });

        Schema::table('detail_kategori', function($table){
            $table->foreign('id_penjahit')->references('id_penjahit')->on('penjahit')->onUpdate('cascade')->onDelete('cascade');;  
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori')->onUpdate('cascade')->onDelete('cascade');;         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_kategori');
    }
}
