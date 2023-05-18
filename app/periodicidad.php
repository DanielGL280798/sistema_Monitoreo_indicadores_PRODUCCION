<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class periodicidad extends Model
{
  protected $table = 'periodicidad';

protected $fillable = [
'id',
'nombre'
];
}
