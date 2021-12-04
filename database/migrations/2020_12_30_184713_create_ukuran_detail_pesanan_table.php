<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUkuranDetailPesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ukuran_detail_pesanan', function (Blueprint $table) {
            $table->increments('id_ukuran_detail_pesanan');
            $table->integer('id_pesanan')->unsigned()->nullable();
            $table->integer('id_ukuran')->unsigned()->nullable();
            $table->integer('ukuran_pesanan')->unsigned()->nullable();
        });

        Schema::table('ukuran_detail_pesanan', function($table){
            $table->foreign('id_pesanan')->references('id_pesanan')->on('pesanan')->onUpdate('cascade')->onDelete('cascade');;   
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
        Schema::dropIfExists('ukuran_detail_pesanan');
    }
}
