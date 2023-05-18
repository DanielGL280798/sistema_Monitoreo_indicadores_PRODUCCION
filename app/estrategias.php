<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estrategias extends Model
{
  protected $table = 'estrategias';

protected $fillable = [
'id',
'nombre'
];
}
