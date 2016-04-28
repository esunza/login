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

                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="alert alert-damage">
                             @foreach($errors->all() as $error)
                                <p><font color="red"><li> {{ $error }} </font></li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    
                    <h3>Datos de la Empresa:</h3>
                    <hr />
                    <div class="form-group">
                    {!!Form::open(['url'=>'clientes'])!!}
                        <div class="row">
                            <div class="col-lg-8">
                                {!! Form::label('razonsocial', 'Razón Social:') !!}
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
                                {!! Form::label('direccionfiscal', 'Dirección Físcal:') !!}
                                {!! Form::text('direccionFiscal', null, ['class'=>'form-control']) !!}    
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>Datos de Contácto:</h3>
                                <hr />
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-lg-6">
                                {!! Form::label('nombres', 'Nombres:') !!}
                                {!! Form::text('nombres', null, ['class'=>'form-control']) !!}    
                            </div>
                            <div class="col-lg-3">
                                {!! Form::label('apellidoPaterno', 'Apellido Paterno:') !!}
                                {!! Form::text('apellidoPaterno', null, ['class'=>'form-control']) !!}    
                            </div>
                            <div class="col-lg-3">
                                {!! Form::label('apellidoMaterno', 'Apellido Materno:') !!}
                                {!! Form::text('apellidoMaterno', null, ['class'=>'form-control']) !!}    
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-lg-4">
                                {!! Form::label('email', 'E-Mail:') !!}
                                {!! Form::text('email', null, ['class'=>'form-control']) !!}    
                            </div>
                            <div class="col-lg-4">
                                {!! Form::label('telefono1', 'Telefono 1:') !!}
                                {!! Form::text('telefono1', null, ['class'=>'form-control']) !!}    
                            </div>
                            <div class="col-lg-4">
                                {!! Form::label('telefono2', 'Teleono 2:') !!}
                                {!! Form::text('telefono2', null, ['class'=>'form-control']) !!}    
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>Datos de Logín:</h3>
                                <hr />
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-lg-4">
                                {!! Form::label('usuario', 'Usuario:') !!}
                                {!! Form::text('usuario', null, ['class'=>'form-control']) !!}    
                            </div>
                            <div class="col-lg-4">
                            <label>Contraseña</label>
                                <input type="password" class="form-control" name="contrasenia">    
                            </div>
                            <div class="col-lg-4">
                            <label>Confirmar Contraseña</label>
                                <input type="password" class="form-control" name="confirmarContrasenia">    
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-lg-12">
                                <p align="center">
                                    {!! Form::submit('Aceptar', ['class'=>'btn btn-info']) !!}
                                    &nbsp;&nbsp;&nbsp;
                                    <a href="javascript:window.history.back();" class="btn btn-info">&laquo; Cancelar</a>
                                    &nbsp;&nbsp;&nbsp;
                                    
                                </p>
                            </div>
                        </div>
                        {!!Form::close()!!}

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-1">
        </div>
    </div>
@stop
