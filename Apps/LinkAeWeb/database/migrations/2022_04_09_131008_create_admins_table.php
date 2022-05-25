<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Menjalankan migrasi database.
     *
     * @return void
     */
    public function up()
    {
        //pembuatan tabel admins pada database dengan kolomnya
        Schema::create('admins', function (Blueprint $table) {
            $table->id('id_admin'); //kolom id_admin
            $table->string('username'); //kolom username
            $table->string('password'); //kolom password 
            $table->timestamps(); 
        });
    }

    /**
     * Mengembalikan migrasi database.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
};
