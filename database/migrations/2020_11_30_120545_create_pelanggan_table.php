<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelangganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->increments('id_pelanggan');
            $table->string('nama_pelanggan');
            $table->string('email_pelanggan')->unique();
            $table->string('password_pelanggan');
            $table->string('telp_pelanggan')->nullable();
            $table->string('latitude_pelanggan')->nullable();
            $table->string('longitude_pelanggan')->nullable();
            $table->text('alamat_pelanggan')->nullable();
            $table->string('jk_pelanggan')->nullable();
            $table->text('foto_pelanggan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelanggan');
    }
}
