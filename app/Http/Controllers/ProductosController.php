<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Http\Requests\ProductosRequest;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $productos=Producto::join('tipo_productos','productos.tipo_producto_id','=','tipo_productos.id')
                          ->select('productos.*','tipo_productos.nombre_tipo_producto')
                          ->get();
      // orderBy('nombre_producto','asc')->get();
      return view("productos.index",compact("productos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view("productos.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductosRequest $request)
    {
      $entrada=$request->all();
      Producto::create($entrada);

      return redirect()->back()->with('success','Producto registrado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($busqueda)
    {
      $productos=Producto::join('tipo_productos','productos.tipo_producto_id','=','tipo_productos.id')
                           ->select('productos.*','tipo_productos.nombre_tipo_producto')
                           ->where('nombre_producto','like','%'.$busqueda.'%')
                           ->orWhere('nombre_tipo_producto','like','%'.$busqueda.'%')
                           ->orderBy('nombre_producto','asc')
                           ->get();
      return view("productos.index",compact("productos"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $producto=Producto::findOrFail($id);
      return view("productos.edit",compact("producto"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductosRequest $request, $id)
    {
      $producto=Producto::findOrFail($id);
      $producto->update($request->all());

      return redirect()->back()->with('success','Producto actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $producto=Producto::findOrFail($id);
      $producto->delete();

      return redirect("/productos");
    }
}
