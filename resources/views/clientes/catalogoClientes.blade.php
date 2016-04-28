@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 align="center">RELACION DE CLIENTES</h3>
                </div>
                <div class="panel-body">
                
                <hr />
                    <div class="row">
                        <div class="col-lg-3">
                            <div id="page-inner">         
                                <div class="row text-center pad-top">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="div-square">
                                            <a href="clientes/create" class="thumbnail">
                                                <i class="fa fa-user-plus fa-2x"></i>
                                                <h5>Agregar</h5>
                                            </a>
                                        </div>
                                    </div> 
                     
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="div-square">
                                            <a href="home" class="thumbnail">
                                                <i class="fa fa-home fa-2x"></i>
                                                <h5>Inicio</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-lg-12">
                            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <td align="center">CLAVE</td>
                                        <td align="center">NOMBRES COMPLETO</td>
                                        <td align="center">E-MAIL</td>
                                        <td align="center">TELEFONO</td>
                                        <td align="center">OPCIONES</td>
                                    </tr>
                                </thead>
                            
                                @foreach ($clientes as $cliente)
                                    <tr>
                                        <td align="center">{{ $cliente->id }}</td>
                                        <td>{{ $cliente->nombres }} {{ $cliente->apellidoPaterno }} {{ $cliente->apellidoMaterno }}</td>
                                        <td>{{ $cliente->email }}</td>
                                        <td>{{ $cliente->telefono1 }}</td>
                                        <td align="center">
                                            <button type="button" class="btn btn-default" aria-label="Left Align">
                                                <a href="clientes/{{$cliente->id}}/edit" title="Editar cliente">
                                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                </a>
                                            </button>
                                            &nbsp;
                                            <button type="button" class="btn btn-default" aria-label="Left Align">
                                                <a href="clientes/{{$cliente->id}}/eliminar" onclick="return confirm('¿DESEA REALMENTE ELIMINAR AL CLIENTE?')" title="Eliminar cliente">
                                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                </a>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-1">
    </div>
</div>
@endsection
