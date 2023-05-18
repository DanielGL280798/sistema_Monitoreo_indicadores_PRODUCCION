<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_indicador extends Model
{
  protected $table = 'tipo_indicador';

protected $fillable = [
'id',
'nombre'
];
}
