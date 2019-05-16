<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddActivoToUsuariosTable extends Migration
{
    public function up()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->boolean('activo')->default(false)->after('codigo');
        });
    }

    public function down()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            //
        });
    }
}
