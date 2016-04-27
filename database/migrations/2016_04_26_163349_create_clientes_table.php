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
            $table->increments('id');
            $table->text('razonSocial');
            $table->text('rfc');
            $table->text('direccionFiscal');
            $table->text('nombres');
            $table->text('apellidoPaterno');
            $table->text('apellidoMaterno');
            $table->text('email');
            $table->text('telefono1');
            $table->text('telefono2');
            $table->text('usuario');
            $table->text('contrasenia');
            $table->text('confirmarContrasenia');
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
