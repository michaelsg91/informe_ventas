<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
  use SoftDeletes;

  protected $fillable=["nombre_producto","tipo_producto_id","agrocosur","erma","disprovet","centralpecuaria"];

}
