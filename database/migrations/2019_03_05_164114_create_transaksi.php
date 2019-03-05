<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('id_film');
            $table->string('nama_peminjam', 100);
            $table->string('no_ktp', 100);
            $table->string('foto_ktp', 100);
            $table->date('tanggal_peminjam');
            $table->date('tanggal_kembali');
            $table->string('harga_sewa', 100);
            $table->boolean('status');
            $table->longtext('sinopsis');
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
        Schema::dropIfExists('transaksi');
    }
}
