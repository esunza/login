<html>
	<head>
		<title>Mi primer login con Laravel</title>
		<link href="../../bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>-->
	</head>
	<body>
		<h1 align="center">Bienvenido, Ingresa tus datos.</h1>
		<hr />
		<div class="row">
			<div class="col-lg-3">
			</div>
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">Ingrese sus datos:</div>
						<div class="panel-body">
							<form class="form-horizontal" role="form" method="POST" action="/auth/login">
								<input type="hidden" name="_token" value="GrLidIMLDoexrzkaDA0WYNWVlradltKN0NkC3s7v">
								<div class="form-group">
									<label class="col-md-4 control-label">Usuario:</label>
									<div class="col-md-6">
										<input type="email" class="form-control" name="email" value="">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Contraseña</label>
									<div class="col-md-6">
										<input type="password" class="form-control" name="password">
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<div class="checkbox">
											<label>
												<input type="checkbox" name="remember"> Recordarme
											</label>
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<button type="submit" class="btn btn-primary" style="margin-right: 15px;">
											Iniciar Sesión
										</button>

										<a href="/password/email">¿Olvidaste tu Contraseña?</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
			</div>
		</div>
	</body>
</html>
