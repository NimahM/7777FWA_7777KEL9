<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableRumah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rumah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('gambar');
            $table->string('keterangan');
            $table->integer('komplek_perumahan_id',false,true);
            $table->foreign('komplek_perumahan_id')->references('id')->on('komplek_perumahan')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('kategori_id',false,true);
            $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('cascade')->onUpdate('cascade');
            $table->string('harga');
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
        Schema::drop('rumah');
    }
}
