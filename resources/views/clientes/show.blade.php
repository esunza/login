@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10">
            
            <hr />
            <div class="panel panel-default">
                <div class="panel-heading"><h2 align="center">Detalles del cliente</h2></div>
                <div class="panel-body">
                    <h1>{{$cliente->nombres}}</h1>
                    <h3>{{$cliente->apellidoPaterno}}</h1>
                    <h3>{{$cliente->apellidoMaterno}}</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-1">
        </div>
    </div>
@stop