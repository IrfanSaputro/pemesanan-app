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
            $table->id();
            $table->date('tanggal_pesan');
            $table->date('tanggal_kembali');
            $table->string('nama_pemesan');
            $table->integer('id_driver');
            $table->integer('id_kendaraan');
            $table->boolean('pengawas_kendaraan');
            $table->boolean('admin_kendaraan');
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
        Schema::dropIfExists('pesanan');
    }
}