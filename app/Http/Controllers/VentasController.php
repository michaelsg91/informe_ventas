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
      $ventas=Venta::orderBy('id','desc')->get();
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
