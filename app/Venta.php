<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Venta extends Model
{
  use SoftDeletes;

    protected $fillable=["producto_id","cliente_id","proveedor_id","fecha_venta","cantidad","valor_venta"];
}
