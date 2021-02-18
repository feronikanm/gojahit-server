<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUkuranDetailKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ukuran_detail_kategori', function (Blueprint $table) {
            $table->increments('id_ukuran_detail_kategori');
            $table->integer('id_detail_kategori')->unsigned()->nullable();
            $table->integer('id_ukuran')->unsigned()->nullable();
        });

        Schema::table('ukuran_detail_kategori', function($table){
            $table->foreign('id_detail_kategori')->references('id_detail_kategori')->on('detail_kategori')->onUpdate('cascade')->onDelete('cascade');;  
            $table->foreign('id_ukuran')->references('id_ukuran')->on('ukuran')->onUpdate('cascade')->onDelete('cascade');;         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ukuran_detail_kategori');
    }
}
