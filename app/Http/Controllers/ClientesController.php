<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateClienteRequest;
use App\Clientes;
use Request;

class ClientesController extends Controller
{
    public function index()
    {
        $clientes = Clientes::all();
        return view('clientes.catalogoClientes', compact('clientes'));
    }

    public function show($id)
    {
    	$cliente = Clientes::find($id);
    	return view('clientes.show', compact('cliente'));
    	//return $idCliente;
    }

    public function create()
    {
    	//return "Aqui estara el formilario";
        return view('clientes.create');
    }

    public function store(CreateClienteRequest $request)
    {
        //return "Aqui se va a guardar";
        $input=Request::all();
        //return $input;
        Clientes::create($input);
        return redirect('clientes');
    }

    public function edit($id)
    {
    	$cliente=Clientes::find($id);
    	return view('clientes.edit', compact('cliente'));
    }

    public function update ($id, CreateClienteRequest $request)
    {
    	$cliente=Clientes::find($id);
    	$cliente->update($request->all());

    	return redirect('clientes');
    }
}
