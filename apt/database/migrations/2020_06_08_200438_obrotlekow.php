<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Obrotlekow extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obrotlekow', function (Blueprint $table) {

            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('apteczki_id')->unsigned();
            $table->foreign('apteczki_id')->references('id')->on('apteczki')->onDelete('cascade');
            $table->integer('lek_id');
            $table->foreign('lek_id')->references('id')->on('ListaLekow')->onDelete('cascade');
            $table->bigInteger('dokument_id');
            $table->integer('ilosc');
            $table->date('datawaznosci');
            $table->double('cena');
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
        //
    }
}
