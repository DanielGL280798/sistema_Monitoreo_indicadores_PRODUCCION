<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permisomodal extends Model
{
  protected $table = 'permiso';

protected $fillable = [
'id',
'nombre_boton',
'fk_autorizacion_id',

];
}
