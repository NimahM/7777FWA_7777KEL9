<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableKredit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kredit', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tanggal_kredit');
            $table->integer('pembeli_id',false,true);
            $table->foreign('pembeli_id')->references('id')->on('pembeli')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('rumah_id',false,true);
            $table->foreign('rumah_id')->references('id')->on('rumah')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('kredit');
    }
}
