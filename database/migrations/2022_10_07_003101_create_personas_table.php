<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string("ap_paterno");
            $table->string("ap_materno");
            $table->string("nombre");
            $table->string("curp");
            $table->string("sexo");
            $table->date("fecha_nacimiento");
            $table->string("vulnerabilidad");
            $table->unsignedBigInteger("localidad_id");
            $table->string("manzana");
            $table->string("calle");
            $table->string("colonia");
            $table->string("numero_exterior");
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
        Schema::dropIfExists('personas');
    }
}
