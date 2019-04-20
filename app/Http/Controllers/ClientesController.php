<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Http\Requests\ClientesRequest;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $clientes=Cliente::orderBy('nombre_cliente','asc')->paginate(10);
      return view("clientes.index",compact("clientes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view("clientes.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientesRequest $request)
    {

      $entrada=$request->all();
      Cliente::create($entrada);

      return redirect()->back()->with('success','Cliente registrado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($busqueda)
    {
      $clientes=Cliente::where('nombre_cliente','like','%'.$busqueda.'%')
                        ->orWhere('municipio','like','%'.$busqueda.'%')
                        ->orderBy('nombre_cliente','asc')
                        ->paginate(10);
      return view("clientes.index",compact("clientes"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $cliente=Cliente::findOrFail($id);
      return view("clientes.edit",compact("cliente"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientesRequest $request, $id)
    {
      $cliente=Cliente::findOrFail($id);
      $cliente->update($request->all());

      return redirect()->back()->with('success','Cliente actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $cliente=Cliente::findOrFail($id);
      $cliente->delete();
      return redirect("/clientes");
    }
}
