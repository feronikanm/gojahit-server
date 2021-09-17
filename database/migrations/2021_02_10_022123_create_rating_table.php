<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rating', function (Blueprint $table) {
            $table->increments('id_rating');
            $table->integer('id_penjahit')->unsigned();
            $table->integer('kriteria_1')->unsigned()->nullable();
            $table->integer('kriteria_2')->unsigned()->nullable();
            $table->integer('kriteria_3')->unsigned()->nullable();
            $table->integer('kriteria_4')->unsigned()->nullable();
        });

        Schema::table('rating', function($table){
            $table->foreign('id_penjahit')->references('id_penjahit')->on('penjahit')->onUpdate('cascade')->onDelete('cascade');; 
            // $table->foreign('id_kriteria')->references('id_kriteria')->on('kriteria')->onUpdate('cascade')->onDelete('cascade');;          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rating');
    }
}
