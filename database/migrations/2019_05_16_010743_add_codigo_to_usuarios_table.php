<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCodigoToUsuariosTable extends Migration
{

    public function up()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->string('codigo')->unique()->after('referencia');
        });
    }

    public function down()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            //
        });
    }
}
