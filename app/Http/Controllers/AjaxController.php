<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
class AjaxController extends Controller
{
  public function getValor($producto_id){
    $valor=Producto::find($producto_id);
    echo json_encode($valor);
    exit;
  }
}
