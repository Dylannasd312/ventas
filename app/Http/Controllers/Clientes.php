<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class Clientes extends Controller
{

    public function index()
    {
        $titulo = "Clientes";
        $items = Cliente::all();

        return view('modules.clientes.index', compact('titulo','items'));
    }


    public function create()
    {
        $titulo = "Agregar Cliente";

        return view('modules.clientes.create', compact('titulo'));
    }


    public function store(Request $request)
    {
        $item = new Cliente();

        $item->nombres = $request->nombres;
        $item->apellidos = $request->apellidos;
        $item->nit = $request->nit;
        $item->telefono = $request->telefono;
        $item->email = $request->email;
        $item->direccion = $request->direccion;
        $item->ciudad = $request->ciudad;
        $item->razon_social = $request->razon_social;
        $item->tipo_cliente = $request->tipo_cliente;
        $item->actividad = $request->actividad;

        $item->save();

        return redirect()->route('clientes');
    }


    public function edit($id)
    {
        $titulo = "Editar Cliente";
        $item = Cliente::findOrFail($id);

        return view('modules.clientes.edit', compact('titulo','item'));
    }


    public function update(Request $request, $id)
    {
        $item = Cliente::findOrFail($id);

        $item->nombres = $request->nombres;
        $item->apellidos = $request->apellidos;
        $item->nit = $request->nit;
        $item->telefono = $request->telefono;
        $item->email = $request->email;
        $item->direccion = $request->direccion;
        $item->ciudad = $request->ciudad;
        $item->razon_social = $request->razon_social;
        $item->tipo_cliente = $request->tipo_cliente;
        $item->actividad = $request->actividad;

        $item->save();

        return redirect()->route('clientes');
    }


    public function show($id)
    {
        $titulo = "Eliminar Cliente";
        $item = Cliente::findOrFail($id);

        return view('modules.clientes.show', compact('titulo','item'));
    }


    public function destroy($id)
    {
        $item = Cliente::findOrFail($id);
        $item->delete();

        return redirect()->route('clientes');
    }

}
