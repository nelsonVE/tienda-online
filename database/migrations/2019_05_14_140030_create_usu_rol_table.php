<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usu_rol', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fk_rol')->unsigned();
            $table->bigInteger('fk_usuario')->unsigned();
            $table->foreign('fk_rol')->references('id')->on('rols');
            $table->foreign('fk_usuario')->references('id')->on('usuarios');
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
        Schema::dropIfExists('usu_rol');
    }
}
