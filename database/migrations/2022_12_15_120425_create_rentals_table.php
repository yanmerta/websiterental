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
        Schema::create('rentals', function (Blueprint $table) {
            //primary Key
            $table->id('id_penjual');
            //foreign Key tabel kelompok tani
            $table->foreignId('id_kelompok_renta');
            $table->string('nama');
            $table->integer('nik');
            $table->string('alamat',100);
            $table->string('telp');
            //default length 45
            $table->string('foto',100);
            $table->char('status');
            //default created date
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
        Schema::dropIfExists('rentals');
    }
};
