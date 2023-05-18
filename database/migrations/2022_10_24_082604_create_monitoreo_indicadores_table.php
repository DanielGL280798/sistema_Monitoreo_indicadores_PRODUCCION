<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonitoreoIndicadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('monitoreo_indicadores', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('fk_secretarias_id')->nullable($value = true);
          $table->foreign('fk_secretarias_id')->references('id')->on('secretarias');
          $table->unsignedBigInteger('fk_direcciones_id')->nullable($value = true);
          $table->foreign('fk_direcciones_id')->references('id')->on('direcciones');
          $table->unsignedBigInteger('fk_indicador_id')->nullable($value = true);
          $table->foreign('fk_indicador_id')->references('id')->on('indicador');
          $table->unsignedBigInteger('fk_ejes_id')->nullable($value = true);
          $table->foreign('fk_ejes_id')->references('id')->on('ejes');
          $table->unsignedBigInteger('fk_estrategias_id')->nullable($value = true);
          $table->foreign('fk_estrategias_id')->references('id')->on('estrategias');
          $table->unsignedBigInteger('fk_lineaaccion_id')->nullable($value = true);
          $table->foreign('fk_lineaaccion_id')->references('id')->on('lineas_accion');
          $table->unsignedBigInteger('fk_es_transversal_id')->nullable($value = true);
          $table->foreign('fk_es_transversal_id')->references('id')->on('es_transversal');
          $table->string("nom_indicador", 850);
          $table->string("des_indicador", 850);
          $table->unsignedBigInteger('fk_tipo_indicador_id')->nullable($value = true);
          $table->foreign('fk_tipo_indicador_id')->references('id')->on('tipo_indicador');
          $table->string("base_calculo", 150);
          $table->unsignedBigInteger('fk_periodicidad_id')->nullable($value = true);
          $table->string("tipo_evidencia", 500);
          $table->unsignedBigInteger('fk_tipo_indicador2_id')->nullable($value = true);
          $table->foreign('fk_tipo_indicador2_id')->references('id')->on('tipo_indicador2');
          $table->string("linea_base", 50);
          $table->string("descripcion_linea_base", 950);
          $table->string("metas", 50);
          $table->string("descripcion_meta", 950);
          $table->string("nota", 550);
          $table->string("desc_acc_rea_peri", 950);
          $table->string("desc_acc_rea", 950);
          $table->string("desc_bene_obte", 950);
          $table->string("nu_tipo_pob_benefi", 950);
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
        Schema::dropIfExists('monitoreo_indicadores');
    }
}
