<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LlenarPermisosAutorizacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      DB::table('autorizacion')->insert([
        ['id' => 1, 'nombre' => 'Aprovado'],
        ['id' => 2, 'nombre' => 'Negado'],

        ]);
        DB::table('permiso')->insert([
          ['id' => 1, 'nombre_boton' => ' ', 'fk_autorizacion_id' => 1,],
          ['id' => 2, 'nombre_boton' => 'Boton de Editar y Eliminar Carga 1', 'fk_autorizacion_id' => 2,],
          ['id' => 3, 'nombre_boton' => 'Boton de Editar y Eliminar Carga 2', 'fk_autorizacion_id' => 2,],
          ['id' => 4, 'nombre_boton' => 'Boton de Editar y Eliminar Carga 3', 'fk_autorizacion_id' => 2,],
          ['id' => 5, 'nombre_boton' => 'Boton de Editar y Eliminar Carga 4', 'fk_autorizacion_id' => 2,],
          ['id' => 6, 'nombre_boton' => 'Boton de Editar y Eliminar monitoreo', 'fk_autorizacion_id' => 2,],

          ]);



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
