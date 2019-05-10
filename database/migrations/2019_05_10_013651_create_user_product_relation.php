<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProductRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vpr_usu_pro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha_compra');
            $table->integer('cantidad');
            $table->bigInteger('total');
            $table->bigInteger('fk_producto')->unsigned();
            $table->bigInteger('fk_usuario')->unsigned();
            $table->foreign('fk_producto')->references('id')->on('vpr_producto');
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
        Schema::dropIfExists('vpr_usu_pro');
    }
}
