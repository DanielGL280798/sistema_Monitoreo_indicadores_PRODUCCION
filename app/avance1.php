<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class avance1 extends Model
{

  protected $table = 'carga_avance1';

  protected $fillable = [
  'id',
  'fk_nom_id',
  'meta',
  'evidencia',

  'porcentaje_avance',
  'Logros_beneficio',
  'acciones',
  'acciones_realizar',
  'observaciones',
  'fk_users_id'
  ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
