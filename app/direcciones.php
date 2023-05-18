<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class direcciones extends Model
{
  protected $table = 'direcciones';

protected $fillable = [
'id',
'fk_secretarias_id',
'direcciones'
];
}
