@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 align="center">CATALOGO DE CLIENTES</h3>
                </div>
                <div class="panel-body">
                
                <hr />
                    <div class="row">
                        <div class="col-lg-8">
                            <form>
                              <fieldset class="form-group">
                                <label for="formGroupExampleInput">Realizar una busqueda por nombre</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                              </fieldset>
                            </form>
                        </div>
                        <div class="col-lg-1">
                        </div>
                        <div class="col-lg-3">
                            <div id="page-inner">         
                                <div class="row text-center pad-top">

                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="div-square">
                                            <a href="agregar-cliente" class="thumbnail">
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
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-1">
    </div>
</div>
@endsection
