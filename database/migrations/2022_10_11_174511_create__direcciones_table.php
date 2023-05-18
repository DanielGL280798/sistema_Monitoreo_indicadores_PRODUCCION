<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('direcciones', function (Blueprint $table) {
            $table->id();
            $table->string("direcciones", 100);
            $table->unsignedBigInteger('fk_secretarias_id')->nullable($value = true);
            $table->foreign('fk_secretarias_id')->references('id')->on('secretarias');
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
        Schema::dropIfExists('direcciones');
    }
}
