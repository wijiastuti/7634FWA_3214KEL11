<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_buku');
            $table->integer('penulis_id',false,true);
            $table->foreign('penulis_id')->references('id')->on('penulis')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('penerbit_id',false,true);
            $table->foreign('penerbit_id')->references('id')->on('penerbit')->onUpdate('cascade')->onDelete('cascade');
            $table->date('thn_terbit');

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
        Schema::drop('buku');
    }
}
