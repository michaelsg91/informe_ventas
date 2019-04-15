<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable=["producto_id","cliente_id","proveedor_id","fecha_venta","cantidad","valor_venta"];
}
