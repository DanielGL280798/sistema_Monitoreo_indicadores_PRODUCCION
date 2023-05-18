<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class autorizacion extends Model
{
  protected $table = 'autorizacion';

protected $fillable = [
'id',
'nombre'
];
}
