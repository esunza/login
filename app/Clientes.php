<?php
	namespace App;

	use Illuminate\Database\Eloquent\Model;

	class Clientes extends Model{
		protected $fillable=[
			'razonSocial',
			'rfc',
			'direccionFiscal',
			'nombres',
			'apellidoPaterno',
			'apellidoMaterno',
			'email',
			'telefono1',
			'telefono2',
			'usuario',
			'contrasenia',
			'confirmarContrasenia'
		];
	}