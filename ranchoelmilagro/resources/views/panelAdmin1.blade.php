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

		    <li style="margin-left:600px;"><a href="/" style="color: white;">Inicio</a></li>
				<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="color:white;">
								{{ Auth::user()->email }} <span class="caret" style="color:white;"></span>
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
		<li>
			<a href="#">
				<div class="agregar" data-toggle="modal" data-target="#Agregar" style="margin-left:5%; width:360px; height:470px;">
					<i class="glyphicon glyphicon-plus"></i>
				</div>
			</a>
		</li>
		@forelse($noticias as $reg)
		<div class="container col-md-4" style="margin-left:0%;">

			<li>
		<div style="background-color:#eff3f7;width:360px;border-radius:10px;">
			<div class="wrapper" style="margin-left:5px;margin-top:5px;">
				<img src="{{asset('/img/noticias/'.$reg->Imagen)}}" width="350px" height="350px" style="background-size:all;border-radius:10px;"/>

					<span class="close btnEdit" data-toggle="modal" data-target=".eliminar{{$reg->id_noticia}}"></span>
					<!-- Modal eliminar -->
					<div class="modal fade eliminar{{$reg->id_noticia}}" id="" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					    <div class="vertical-alignment-helper">
					        <div class="modal-dialog vertical-align-center">
					            <div class="modal-content">
					                <div class="modal-header">
					                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cancelar</span>
					                    </button>
					                     <h4 class="modal-title2" id="myModalLabel2">Eliminar</h4>
					                </div>
					                <div class="modal-body">Seguro que quiere eliminar?</div>
					                <div class="modal-footer">
														{!! Form::open( array('route'=>['admin.panelWebController.destroy',$reg->id_noticia],'method'=>'delete')) !!}

					                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
															<input type="hidden" name="iddelete" id="iddelete" value="hola">
															<button type="submit" class="btn btn-primary btndelete">Eliminar</button>
															{!! Form::close() !!}
					                </div>
					            </div>
					        </div>
					    </div>
					</div>

		  </div>
		  <div class="wrapper" style="height:120px;">
		    	<span class="edit btnEdit" data-toggle="modal" data-target="#editar"
					data-id="{{$reg->id_noticia}}"
					data-titulo="{{$reg->Titulo_noticia}}"
					data-descripcion="{{$reg->Descripcion_noticia}}"
					data-noticia="{{$reg->Noticia}}"></span>
			    <p class="titulo">{{$reg->Titulo_noticia}}</p>
			    <p class="parrafo" style="">{{$reg->Descripcion_noticia}}</p>
			</div>

			</div>

		</li>

		</div>
		<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="vertical-alignment-helper">
		        <div class="modal-dialog vertical-align-center">
		            <div class="modal-content">
		                <div class="modal-header">
		                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cancelar</span>
		                    </button>
		                     <h4 class="modal-title" id="myModalLabel" style="font-weight:1000;font-size:3rem;">Editar</h4>
		                </div>
		                <div class="modal-body">
		          {!! Form::open( array('route'=>['admin.panelWebController.edit',$reg->id_noticia],'method'=>'GET')) !!}
							<input type="hidden" name="id_noticia" id="idEditar" value="">
							<input type="text" name="tituloeditar" id="tituloeditar" value=""  style="border: none;border-bottom: .3px solid #a8a8a8; width: 100%; outline: none; height: 50px; font-size: 2rem;" placeholder="">
							<input type="text" name="descripcioneditar" id="descripcioneditar" value=""  style="border: none;border-bottom: .3px solid #a8a8a8; width: 100%; outline: none; height: 50px; font-size: 2rem;" placeholder="">
							<textarea name="noticiaeditar" id="noticiaeditar" value=""  style="font-family: Raleway;font-size: 2rem;width:100%;height:50vh; resize: none;" placeholder=""></textarea>

							<input id="uploadFile" name="uploadFile" placeholder="Archivo Elegido" disabled="disabled" />
							<div class="fileUpload btn btn-primary">
							    <span>Subir Archivo</span>
							    <input id="uploadBtn" name="uploadBtn" type="file" class="upload" />
							</div>
		                </div>
		                <div class="modal-footer">
		                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                    <button type="submit" class="btn btn-primary">Editar</button>
		                </div>

										{{Form::close()}}

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

		@empty
			<p>Sin registros</p>
			<li>
				<a href="#">
					<div class="agregar" data-toggle="modal" data-target="#Agregar">
						<i class="glyphicon glyphicon-plus"></i>
					</div>
				</a>
			</li>

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
		@endforelse

	</div><!--div blanco-->
</div><!--div gris-->


<!-- Modal editar -->

<!-- Boton de subir archivos -->
<script>
	document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
	};
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/nav.js')}}"></script>
<script type="text/javascript">
$(document).ready(function(){
	$(".btnEdit").on('click',function(){
		var n=$(this).data('tituloeditar');
		var p=$(this).data('descripcioneditar');
		var pp=$(this).data('noticiaeditar');
		var i=$(this).data('id');
		var im=$(this).data('uploadBtn');

		$("#uploadBtn").val(im);
		$("#tituloeditar").val(n);
		$("#idEditar").val(i);
		$("#descripcioneditar").val(p);
		$("#noticiaeditar").val(pp);
	});
	$('.btnEdit').on('click',function(event){
		var rutat=$(this).attr('data-titulo');
		document.getElementById("tituloeditar").value = rutat;
			$('.modal-title').text("Editando: "+ rutat);

		var rutad=$(this).attr('data-descripcion');
		document.getElementById("descripcioneditar").value = rutad;

		var rutan=$(this).attr('data-noticia');
		document.getElementById("noticiaeditar").value = rutan;
	});
	$('.btndelete').on('click',function(event){
			var i=$(this).data('id');
			$("#iddelete").val(i);


		});
});
</script>
</body>
</html>
