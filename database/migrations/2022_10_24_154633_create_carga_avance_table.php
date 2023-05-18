<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargaAvanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carga_avance', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_nom_id')->nullable($value = true);
            $table->foreign('fk_nom_id')->references('id')->on('monitoreo_indicadores');
            $table->string("meta", 50);
            $table->string("evidencia", 500);
            $table->unsignedBigInteger('fk_periodicidad_id')->nullable($value = true);
            $table->foreign('fk_periodicidad_id')->references('id')->on('periodicidad');
            $table->string("porcentaje_avance", 50);
            $table->string("Logros_beneficio", 850);
            $table->string("acciones", 850);
            $table->string("acciones_realizar", 850);
            $table->string("observaciones", 850);
            $table->unsignedBigInteger('fk_users_id')->nullable($value = true);
            $table->foreign('fk_users_id')->references('id')->on('users');
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
        Schema::dropIfExists('carga_avance');
    }
}
