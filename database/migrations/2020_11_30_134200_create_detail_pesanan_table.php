<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('detail_pesanan', function (Blueprint $table) {
            $table->increments('id_detail_pesanan');
            $table->integer('id_pesanan')->unsigned();
            $table->text('catatan_pesanan')->nullable();
            $table->string('kategori')->nullable();
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
        });

        Schema::table('detail_pesanan', function($table){
            $table->foreign('id_pesanan')->references('id_pesanan')->on('pesanan')->onUpdate('cascade')->onDelete('cascade');            
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pesanan');
    }
}
