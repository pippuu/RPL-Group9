<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Method untuk pembuatan tabel promo
     * @param : -
     * @return : -, hanya melakukan pembuatan tabel pada database
     */
    public function up()
    {
        Schema::create('promos', function (Blueprint $table) {
            $table->id('id_promo');
            $table->unsignedBigInteger('id_admin');
            $table->string('namaPromo');
            $table->integer('discPromo');
            $table->string('expireDate');
            $table->timestamps();
            // $table->nullable()->unsignedBigInteger('id_user');

            $table->unsignedBigInteger('id_user');

            $table->foreign('id_admin')->references('id_admin')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promos');
    }
};
