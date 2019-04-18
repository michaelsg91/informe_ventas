<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
  use SoftDeletes;

  protected $fillable=["nombre_cliente","codigo","telefono","direccion","municipio"];

}
