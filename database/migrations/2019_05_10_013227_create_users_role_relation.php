<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersRoleRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vpr_usu_rol', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fk_rol')->unsigned();
            $table->bigInteger('fk_usuario')->unsigned();
            $table->foreign('fk_rol')->references('id')->on('vpr_rol');
            $table->foreign('fk_usuario')->references('id')->on('vpr_usuario');
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
        Schema::dropIfExists('vpr_usu_rol');
    }
}
