@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 align="center">SISTEMA ADMINISTRATIVO DE SERVICIOS E INSTALACIONES</h3></div>
                <div class="panel-body">
                    <div id="page-inner">         
                        <hr />
                        <div class="row text-center pad-top">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                <div class="div-square">
                                    <a href="clientes" class="thumbnail">
                                        <i class="fa fa-user fa-5x"></i>
                                        <h4>CLIENTES</h4>
                                    </a>
                                </div>
                            </div> 
                 
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                <div class="div-square">
                                    <a href="tickets" class="thumbnail">
                                        <i class="fa fa-ticket fa-5x" ></i>
                                        <h4>TICKETS</h4>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                <div class="div-square">
                                    <a href="tecnicos" class="thumbnail">
                                        <i class="fa fa-male fa-5x"></i>
                                        <h4>TECNICOS</h4>
                                    </a>
                                </div> 
                            </div>
                  
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                <div class="div-square">
                                    <a href="unidades" class="thumbnail">
                                        <i class="fa fa-car fa-5x"></i>
                                        <h4>UNIDADES</h4>
                                    </a>
                                </div>
                            </div>
                  
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                <div class="div-square">
                                    <a href="herramientas" class="thumbnail">
                                        <i class="fa fa-wrench fa-5x"></i>
                                        <h4>HERRAMIENTAS</h4>
                                    </a>
                                </div>
                            </div>
                  
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                <div class="div-square">
                                    <a href="reportes" class="thumbnail">
                                        <i class="fa fa-clipboard fa-5x"></i>
                                        <h4>REPORTES</h4>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row text-center pad-top">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                <div class="div-square">
                                    <a href="usuarios" class="thumbnail">
                                        <i class="fa fa-users fa-5x"></i>
                                        <h4>USUARIOS</h4>
                                    </a>
                                </div>
                            </div> 
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
