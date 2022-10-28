<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaEscuelaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona_escuela', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("escuela_id");
            $table->unsignedBigInteger("persona_id");
            $table->string("estatus");
            $table->foreign("escuela_id")->references("id")->on("escuelas");
            $table->foreign("persona_id")->references("id")->on("personas");
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
        Schema::dropIfExists('persona_escuela');
    }
}
