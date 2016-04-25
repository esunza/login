<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('idCliente');
            $table->string('razonSocial');
            $table->string('rfc');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->string('nombres');
            $table->string('direccion');
            $table->string('email');
            $table->string('telefono1');
            $table->string('telefono2');
            $table->string('usuario');
            $table->string('contrasenia');
            $table->string('confirmarContrasenia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clientes');
    }
}
