<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
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
		<div class="input-group col-md-12 col-md-offset-0">
			@if($errors->any())
				<div class="alert alert-warning alert-dismissible fade in">
  				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<ul>
						@foreach($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
			@endif
		{{Form::open( array('url'=>'/admin/usuarios','files'=>true)) }}
		</div>
			<ul class="form-style-1">

					<li>
						<label>Nombre Usuario <span class="required">*</span></label>
						{{Form::text('nombre','',array('class'=>'form-control','placeholder'=>''))}}
					</li>
          <li>
							<label>Contraseña <span class="required">*</span> </label>
							{{Form::password('contrasena',array('class'=>'form-control','placeholder'=>''))}}
					</li>
					<li>
							<label>Verificar contraseña <span class="required">*</span> </label>
							{{Form::password('contranueva',array('class'=>'form-control','placeholder'=>''))}}
					</li>

					<li>
            <div class="input-group col-md-12 col-sm-12 col-xs-12">
              {{Form::submit('Enviar',array('class'=>'btn btn-primary form-control'))}}
            </div>

					</li>
			</ul>

		{{Form::close()}}

  </section>
  </div>
	<!-- Boton de subir archivos -->

	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="{{('/js/adminpanel.js')}}"></script>
</body>
</html>
