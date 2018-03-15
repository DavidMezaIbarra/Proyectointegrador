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
	<div>
		<header>
			<div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
			  <ul class="nav navbar-nav">
			    <li><img src="{{asset('/img/logo.png')}}" class="img-responsive" alt="Responsive image" style="margin-top: 2%;"></li>
			    <li style="margin-left:-50px;"><a href="/" style="color: white;">Inicio</a></li>
					<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
									{{ Auth::user()->name }} <span class="caret" style="color:white;"></span>
							</a>
							<ul class="dropdown-menu">
									<li>
											<a href="{{ route('logout') }}"
													onclick="event.preventDefault();
																	 document.getElementById('logout-form').submit();">
													Cerrar sesión
											</a>
											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
													{{ csrf_field() }}
											</form>
									</li>
									<li>
											<a href="/admin/">
													Agregar noticia
											</a

									</li>
							</ul>
					</li>
			  </ul>
			</div>
		</header>
	<!-- Content Here -->

		<div class=" col-md-12" style="background-color:#263238;height:100vh;">
			<div class=" col-md-12" style="margin-top: 50px;background-color: white;height: auto;">
			    <h1 style="text-align:center;"><strong>Bienvenido</strong> "Nombre de la persona"</h1>
					<p style="font-weight:600;font-size:2rem">Agregar Usuario</p>
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
						@if(session()->has('mensaje'))
							<div class="alert alert-success">
								{{session()->get('mensaje')}}
							</div>
						@endif
						<div class="row">
							<h2>usuarios</h2>
							<table class="table table-condensed">
								<thead>
									<tr>
										<td>Id</td>
										<td>Nombre</td>
										<td>Editar</td>
										<td>Eliminar</td>
									</tr>
								</thead>
								<tbody>
									@forelse($usuarios as $usu)
									<tr>
										<td>{{$usu->id}}</td>
										<td>{{$usu->email}}</td>
										<td></td>
										<td>
											{!! Form::open( array('route'=>['admin.usuarios.destroy',$usu->id],'method'=>'delete')) !!}
											<button type="submit" class="btn btn-primary" style="width:70px;height:30px;border-radius:10px;">
												<i class="glyphicon glyphicon-trash" style="font-size:12px;margin:0px;color:white"></i>
											</button>

											{!! Form::close() !!}
										</td>
									</tr>
									@empty
										<p>Sin registros</p>
									@endforelse
								</tbody>
							</table>
						</div>
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


  </div>
  </div>
  </div>
	<!-- Boton de subir archivos -->

	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="{{('/js/adminpanel.js')}}"></script>
</body>
</html>
