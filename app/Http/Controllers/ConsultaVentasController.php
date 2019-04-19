<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venta;

class ConsultaVentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $ventas=Venta::where('fecha_venta',date('Y-m-d'))->get();
      return view("consultas.index",compact("ventas"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $fecha_inicial=$request->fecha_inicial;
      $fecha_final=$request->fecha_final;
      $cliente_id=$request->cliente_id;
      $producto_id=$request->producto_id;
      $proveedor_id=$request->proveedor_id;

      if($cliente_id!=0){
        $ventas=Venta::withTrashed()->where('cliente_id',$cliente_id)->whereBetween('fecha_venta', [$fecha_inicial, $fecha_final])->get();
        return view("consultas.index",compact("ventas"));

      }else if($producto_id!=0){
        $ventas=Venta::withTrashed()->where('producto_id',$producto_id)->whereBetween('fecha_venta', [$fecha_inicial, $fecha_final])->get();
        return view("consultas.index",compact("ventas"));
      }else if($proveedor_id!=0){
        $ventas=Venta::withTrashed()->where('proveedor_id',$proveedor_id)->whereBetween('fecha_venta', [$fecha_inicial, $fecha_final])->get();
        return view("consultas.index",compact("ventas"));
      }else{
        $ventas=Venta::withTrashed()->whereBetween('fecha_venta', [$fecha_inicial, $fecha_final])->get();
        return view("consultas.index",compact("ventas"));
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
