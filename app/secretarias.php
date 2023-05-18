<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class secretarias extends Model
{
  protected $table = 'secretarias';

protected $fillable = [
'id',
'nombre'
];
}
