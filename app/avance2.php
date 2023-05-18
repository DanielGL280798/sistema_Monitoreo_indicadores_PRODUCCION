<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class avance2 extends Model
{

  protected $table = 'carga_avance2';

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
