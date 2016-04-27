<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateClienteRequest;
use App\Clientes;
use Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        return view('home');
    }

    public function clientes()
    {
        //return view('clientes');
        $clientes=clientes::all();
        //return $clientes;
        return view('clientes.catalogoClientes', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.agregarCliente');
    }

    public function store(CreateClienteRequest $request)
    {
        //$input=Request::all();
        Clientes::create($request->all());
        return redirect('clientes');
    }

    public function edit($id)
    {
        //return 'Aqui editamos el cliente: ' . $idCliente;
        $cliente=Clientes::find($id);

        //return "id clinte" . $cliente; 
        return view('EditarCliente', compact('cliente'));
    }
}
