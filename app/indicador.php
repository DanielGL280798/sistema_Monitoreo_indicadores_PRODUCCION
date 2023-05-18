<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class indicador extends Model
{
  protected $table = 'indicador';

protected $fillable = [
'id',
'nombre'
];
}
