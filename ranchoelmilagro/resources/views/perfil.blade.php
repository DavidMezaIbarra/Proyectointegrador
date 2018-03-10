<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('/css/estilos.css')}}">
	<link rel="stylesheet" href="{{asset('/css/adminpanel.css')}}">
	<link rel="stylesheet" href="{{asset('/css/perfil.css')}}">
	<meta charset="UTF-8">
	<title>Panel de Administración</title>
</head>
<body>
	@extends('/includes/navs')
	<div class="main">
	<!-- Content Here -->
	<section id="s6" style="height: auto;">
    <h1>Bienvenido Administrador</h1>
		{{Form::open( array('url'=>'/admin/usuarios2','files'=>true)) }}

			<ul class="form-style-1">
				<li>
					{{Form::select('usuario',array('admin'=>'Administrador','normal','Normal'))}}
					<label>Usuario</label>
					<select name="field4" class="field-select">
					<option value="Advertise">Admin</option>
					<option value="Partnership">Ramona</option>
					<option value="General Question">Ximena</option>
					</select>
			</li>
					<li>
						<label>Nombre Usuario <span class="required">*</span></label>
						{{Form::name('nombre','',array('class'=>'form-control','placeholder'=>''))}}
					</li>
					<li>
							<label>Cambiar contraseña <span class="required">*</span></label>
							<input type="checkbox" name="field3" />
					</li>					
					<li>
							<label>Nueva contraseña <span class="required">*</span> </label>
							{{Form::password('contraseña','',array('class'=>'form-control','placeholder'=>''))}}
					</li>
					<li>
							<label>Verificar contraseña <span class="required">*</span> </label>
							{{Form::password2('contranueva','',array('class'=>'form-control','placeholder'=>''))}}
					</li>

					<li>
							<input type="submit" value="Aceptar" />
					</li>
			</ul>

		{{Form::close()}}

  </section>
  </div>
	<!-- Boton de subir archivos -->

	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="./js/adminpanel.js"></script>
</body>
</html>
