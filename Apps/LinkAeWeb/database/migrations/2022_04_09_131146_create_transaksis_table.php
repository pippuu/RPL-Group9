<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Menjalankan migrasi ke database, berikut kolom-kolom yang dimiliki oleh tabel transaksi, dengan foreign key ''
     *
     * @return void
     */
    public function up()
    {
        // pembuatan tabel transaksi beserta kolom-kolomnya
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->unsignedBigInteger('id_user');
            $table->string('tipe');
            $table->date('waktu');
            $table->integer('nominal');
            $table->string('keterangan');
            $table->timestamps();

            // kolom 'id_user' merupakan foreign key yang merujuk ke 'id_user pada tabel users'
            $table->foreign('id_user')->references('id_user')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
};
