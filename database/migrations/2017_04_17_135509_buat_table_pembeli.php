<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTablePembeli extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembeli', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',50);
            $table->string('no_telp',18);
            $table->text('alamat');
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
        Schema::drop('pembeli');
    }
}
