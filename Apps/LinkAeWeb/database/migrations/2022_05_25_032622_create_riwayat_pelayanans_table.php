<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('riwayat_pelayanans', function (Blueprint $table) {
        //     $table->id('id_riwayat_pelayanan');
        //     $table->foreignId('id_cs');
        //     $table->foreignId('id_user');
        //     $table->string('date');
        //     $table->timestamps();

        //     $table->foreign('id_user')->references('id')->on('users');
        //     $table->foreign('id_cs')->references('id_cs')->on('customer_services');

        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_pelayanans');
    }
};
