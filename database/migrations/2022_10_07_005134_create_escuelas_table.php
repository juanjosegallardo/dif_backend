<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscuelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escuelas', function (Blueprint $table) {
            $table->id();
            $table->string("id_interno");
            //$table->unsignedBigInteger("ruta_id");
            $table->string("plantel");
            $table->unsignedBigInteger("localidad_id");
            $table->string("marginacion");
            $table->string("cct");
            $table->string("nivel");
            //$table->foreign("ruta_id")->references("id")->on("rutas");
            $table->foreign("localidad_id")->references("id")->on("localidades");
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
        Schema::dropIfExists('escuelas');
    }
}
