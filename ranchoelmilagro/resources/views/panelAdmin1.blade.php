<!DOCTYPE html>
<html lang="es">
<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('/css/bootstrap.css')}}"rel="stylesheet">
		<link rel="stylesheet" href="{{asset('/css/estilos.css')}}">
    <link rel="stylesheet" href="{{asset('/css/paneladmin1.css')}}">
	<title>Admin</title>
</head>
<body>
	<header>
		<div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
		  <ul class="nav navbar-nav">
				<li><img src="{{asset('/img/logoiglesia.png')}}" class="img-responsive" alt="Responsive image" style="width:50px;heightauto;"></li>
		    <li>
					<img src="{{asset('/img/logo.png')}}" class="img-responsive" alt="Responsive image" style="margin-top: 2%;">
				</li>

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
										<a href="/admin/usuarios">
												Agregar usuario
										</a>

								</li>
						</ul>
				</li>
		  </ul>
		</div>
	</header>
<div class="container col-md-12" style="background-color:#263238;">
	<div class="container col-md-12" style="margin-top: 50px;background-color: white;height: auto;">
		<div class="input-group col-md-12 col-md-offset-0">
			@if($errors->any())
				<div class="alert alert-warning alert-dismissible fade in" style="height:100px;">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<ul>
						@foreach($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
			@endif

			@if(session()->has('mensaje'))
				<div class="alert alert-success alert-dismissible fade in" style="text-align:center;">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<label for="">Noticia Agregada</label>
				</div>
			@endif
		</div>
		<div class="container col-md-12  " style="text-align:center;font-size:5rem;background-color:white;">

			<p class="titulo" style="text-align:center;font-size:5rem;">Bienvenidos</p>
			<p class="parrafo" style="text-align:center;font-size:2rem;">Aqui podrá editar las noticias que aparecen en la pantalla principal </p>

		</div>
		<div class="container col-md-12" style="margin-left:5%;">
@forelse($noticias as $reg)
			<li>
		<div style="background-color:#eff3f7;width:360px;border-radius:10px;">
			<div class="wrapper" style="margin-left:5px;margin-top:5px;">
				<img src="{{asset('/img/noticias/'.$reg->Imagen)}}" width="350px" height="350px" style="background-size:all;border-radius:10px;"/>
				<span class="close" data-toggle="modal" data-target="#eliminar"></span>
		  </div>
		  <div class="wrapper" style="height:120px;">
		    	<span class="edit" data-toggle="modal" data-target="#editar"></span>
			    <p class="titulo">{{$reg->Titulo_noticia}}</p>
			    <p class="parrafo" style="">{{$reg->Descripcion_noticia}}</p>
			</div>
			@empty
				<p>Sin registros</p>
			@endforelse
			</div>
		</li>

		<li>
			<a href="#">
				<div class="agregar" data-toggle="modal" data-target="#Agregar">
					<i class="glyphicon glyphicon-plus"></i>
				</div>
			</a>
		</li>
		</div>
	</div>
</div>
<!-- Modal eliminar -->
<div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cancelar</span>
                    </button>
                     <h4 class="modal-title" id="myModalLabel">Eliminar</h4>
                </div>
                <div class="modal-body">Seguro que quiere eliminar?</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal editar -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cancelar</span>
                    </button>
                     <h4 class="modal-title" id="myModalLabel">Editar</h4>
                </div>
                <div class="modal-body">
          {{Form::open( array('url'=>'/admin/','files'=>true)) }}
						{{Form::text('Titulo','',array('style'=>'border: none;border-bottom: .3px solid #a8a8a8; width: 100%; outline: none; height: 50px; font-size: 2rem;','placeholder'=>'Titulo de noticia'))}}
						{{Form::text('Descripcion','',array('style'=>'border: none;border-bottom: .3px solid #a8a8a8; width: 100%; outline: none; height: 50px; font-size: 2rem;','placeholder'=>'Descripcion de noticia'))}}
						{{Form::textarea('Noticia','',array('style'=>'font-family: Raleway;font-size: 12pt;width:100%;height:50vh; resize: none;','placeholder'=>'Titulo de noticia'))}}
					{{Form::close()}}
					<input id="uploadFile" placeholder="Archivo Elegido" disabled="disabled" />
					<div class="fileUpload btn btn-primary">
					    <span>Subir Archivo</span>
					    <input id="uploadBtn" type="file" class="upload" />
					</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Editar</button>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Agregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

			{{Form::open( array('url'=>'/admin/','files'=>true)) }}
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
						<div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cancelar</span>
                    </button>
                     <h4 class="modal-title" id="myModalLabel">Agregar</h4>
                </div>
                <div class="modal-body">
										{{Form::text('Titulo','',array('style'=>'border: none;border-bottom: .3px solid #a8a8a8; width: 100%; outline: none; height: 50px; font-size: 2rem;','placeholder'=>'Titulo de la noticia'))}}
										{{Form::text('Descripcion','',array('style'=>'border: none;border-bottom: .3px solid #a8a8a8; width: 100%; outline: none; height: 50px; font-size: 2rem;','placeholder'=>'Descripcion de noticia'))}}
										{{Form::textarea('Noticia','',array('style'=>'font-family: Raleway;font-size: 12pt;width:100%;height:50vh; resize: none;','placeholder'=>'Noticia'))}}

					<input id="uploadFile" placeholder="Archivo Elegido" disabled="disabled" />
					<div class="fileUpload btn btn-primary">
					    <span>Subir Archivo</span>
					    <input id="uploadBtn" type="file" class="upload" name="Imagen" />
					</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										{{Form::submit('Agregar',array('class'=>'btn btn-primary'))}}
                </div>
            </div>
						{{Form::close()}}
        </div>
    </div>
</div>

<!-- Boton de subir archivos -->
<script>
	document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
	};
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/nav.js')}}"></script>
</body>
</html>
