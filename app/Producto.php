<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  protected $fillable=["nombre_producto","tipo_producto_id","agrocosur","erma","disprovet","centralpecuaria"];

}
