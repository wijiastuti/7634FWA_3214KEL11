<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableAnggotaBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota_buku', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('anggota_id',false,true);
            $table->foreign('anggota_id')->references('id')->on('anggota')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('buku_id',false,true);
            $table->foreign('buku_id')->references('id')->on('buku')->onUpdate('cascade')->onDelete('cascade');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
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
        Schema::drop('anggota_buku');
    }
}
