<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Venta;
use App\Http\Requests\VentasRequest;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $ventas=Venta::join('productos','productos.id','=','ventas.producto_id')
                     ->join('clientes','clientes.id','=','ventas.cliente_id')
                     ->join('proveedors','proveedors.id','=','ventas.proveedor_id')
                     ->select('ventas.*','productos.nombre_producto','clientes.nombre_cliente','proveedors.nombre_proveedor')
                     ->orderBy('id','desc')
                     ->get();
      return view("ventas.index",compact("ventas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      return view("ventas.create");

    }

    // Funcion para obtener valor unitario
    public function getValor($producto_id){
      $valor=Producto::find($producto_id);
      echo json_encode($valor);
      exit;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VentasRequest $request)
    {
      $entrada=$request->all();
      Venta::create($entrada);

      return redirect()->back()->with('success','Venta registrada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($busqueda)
    {
        $ventas=Venta::join('productos','productos.id','=','ventas.producto_id')
                       ->join('clientes','clientes.id','=','ventas.cliente_id')
                       ->join('proveedors','proveedors.id','=','ventas.proveedor_id')
                       ->select('ventas.*','productos.nombre_producto','clientes.nombre_cliente','proveedors.nombre_proveedor')
                       ->where('nombre_producto','like','%'.$busqueda.'%')
                       ->orWhere('nombre_proveedor','like','%'.$busqueda.'%')
                       ->orWhere('nombre_cliente','like','%'.$busqueda.'%')
                       ->orderBy('id','desc')
                       ->get();

        return view("ventas.index",compact("ventas"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $venta=Venta::findOrFail($id);
        return view("ventas.edit",compact("venta"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VentasRequest $request, $id)
    {
      $venta=Venta::findOrFail($id);
      $venta->update($request->all());

      return redirect()->back()->with('success','Venta actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $venta=Venta::findOrFail($id);
      $venta->delete();

      return redirect("/ventas");
    }
}
