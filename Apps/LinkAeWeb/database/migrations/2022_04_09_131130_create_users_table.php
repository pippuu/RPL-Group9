<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Menjalankan migrasi ke database, dengan kolom-kolom untuk tabel user yang dimiliki adah sebagai berikut     *
     * @return void
     */
    public function up()
    {
        // Memploting nama beserta tipe data ke kolom-kolom users ke database
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('nama');
            $table->string('username');
            $table->string('password');
            $table->integer('saldo');
            $table->timestamps();
        });
                
        DB::table('users')->insert(
            array(
                'nama' => 'rafif',
                'username' => 'rafif123',
                'password' => Hash::make('fausta'),
                'saldo' => 1000000,
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
