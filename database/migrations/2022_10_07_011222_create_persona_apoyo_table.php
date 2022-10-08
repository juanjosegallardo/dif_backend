<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaApoyoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona_apoyo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("apoyo_id");
            $table->unsignedBigInteger("persona_id");
            $table->foreign("apoyo_id")->references("id")->on("apoyos");
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
        Schema::dropIfExists('persona_apoyo');
    }
}
