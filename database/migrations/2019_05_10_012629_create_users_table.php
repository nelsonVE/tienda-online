<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vpr_usuario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('pass');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->bigInteger('referencia')->unsigned()->nullable();
            $table->foreign('referencia')->references('id')->on('vpr_usuario');
            $table->date('fecha_registro');
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
        Schema::dropIfExists('vpr_usuario');
    }
}
