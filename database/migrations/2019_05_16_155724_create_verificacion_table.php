<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerificacionTable extends Migration
{

    public function up()
    {
        Schema::create('verificacion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('key');
            $table->bigInteger('fk_usuario')->unsigned();
            $table->boolean('activo')->default(false);
            $table->foreign('fk_usuario')->references('id')->on('usuarios')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('verificacion');
    }
}