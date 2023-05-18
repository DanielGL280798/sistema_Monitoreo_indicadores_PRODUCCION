<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Permisos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('permiso', function (Blueprint $table) {
          $table->id();
          $table->string("nombre_boton", 100);
          $table->unsignedBigInteger('fk_autorizacion_id')->nullable($value = true);
          $table->foreign('fk_autorizacion_id')->references('id')->on('autorizacion');
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
        //
    }
}
