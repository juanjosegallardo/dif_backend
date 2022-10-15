<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRutaLocalidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruta_localidad', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("localidad_id");
            $table->unsignedBigInteger("ruta_id");
            $table->foreign("localidad_id")->references("id")->on("localidades");
            $table->foreign("ruta_id")->references("id")->on("rutas");
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
        Schema::dropIfExists('ruta_localidad');
    }
}
