@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10">
            
            <hr />
            <div class="panel panel-default">
                <div class="panel-heading"><h2 align="center">Agregar nuevo cliente</h2></div>
                <div class="panel-body">
                    <h3>Datos de la empresa:</h3>
                    <hr />
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-8">
                                {!!Form::open(['url'=>'insertar-cliente'])!!}

                                    {!! Form::label('razonsocial', 'Razon Social:') !!}
                                    {!! Form::text('razonSocial', null, ['class'=>'form-control']) !!}
                                    
                            </div>

                            <div class="col-lg-4">

                                    {!! Form::label('rfc', 'R.F.C:') !!}
                                    {!! Form::text('rfc', null, ['class'=>'form-control']) !!}
                                    
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-lg-12">
                                <p align="center">
                                    {!! Form::submit('Agregar Cliente', ['class'=>'btn btn-info']) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-1">
        </div>
    </div>
@stop
