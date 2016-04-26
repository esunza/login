<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\clientes;
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
        return view('clientes');
    }

    public function create()
    {
        return view('agregarCliente');
    }

    public function store()
    {
        $input=Request::all();
        Clientes::create($input);
        return redirect('clientes');
    }
}
