<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="./css/estilos.css">
	<link rel="stylesheet" href="./css/adminpanel.css">
	<meta charset="UTF-8">
	<title>Panel de Administración</title>
</head>
<body>
	@extends('/includes/navs')
	<div class="main">
	<!-- Content Here -->
	<section id="s6" style="height: auto;">
		<ul class="container">
			<div><p class="titulo" style="text-align: center;font-size: 5rem;">Noticias</p></div>
			<li>
				<div class="wrapper">
					<img src="{{asset('/img/bg1.jpg')}}" width="300px" height="300px"/>
					<span class="close" data-toggle="modal" data-target="#eliminar"></span>
			  </div>
			  <div class="wrapper">
			    	<span class="edit" data-toggle="modal" data-target="#editar"></span>
				    <p class="titulo">Esta es una noticia</p>
				    <p class="parrafo">Aqui vemos que en rancho el milagro ayudamos a todo tipo de personasasdasdasdasdasfjahfkjadhd kjashfkjaasdas dasdasdadah</p>
				</div>
			</li>
			<li>
				<div class="wrapper">
					<img src="{{asset('/img/bg1.jpg')}}" width="300px" height="300px"/>
					<span class="close" data-toggle="modal" data-target="#eliminar"></span>
			  </div>
			  <div class="wrapper">
			    	<span class="edit" data-toggle="modal" data-target="#editar"></span>
				    <p class="titulo">Esta es una noticia</p>
				    <p class="parrafo">Aqui vemos que en rancho el milagro ayudamos a todo tipo de personasasdasdasdasdasfjahfkjadhd kjashfkjaasdas dasdasdadah</p>
				</div>
			</li>
			<li>
				<div class="wrapper">
					<img src="{{asset('/img/bg1.jpg')}}" width="300px" height="300px"/>
					<span class="close" data-toggle="modal" data-target="#eliminar"></span>
			  </div>
			  <div class="wrapper">
			    	<span class="edit" data-toggle="modal" data-target="#editar"></span>
				    <p class="titulo">Esta es una noticia</p>
				    <p class="parrafo">Aqui vemos que en rancho el milagro ayudamos a todo tipo de personasasdasdasdasdasfjahfkjadhd kjashfkjaasdas dasdasdadah</p>
				</div>
			</li>
			<li>
				<div class="wrapper">
					<img src="{{asset('/img/bg1.jpg')}}" width="300px" height="300px"/>
					<span class="close" data-toggle="modal" data-target="#eliminar"></span>
			  </div>
			  <div class="wrapper">
			    	<span class="edit" data-toggle="modal" data-target="#editar"></span>
				    <p class="titulo">Esta es una noticia</p>
				    <p class="parrafo">Aqui vemos que en rancho el milagro ayudamos a todo tipo de personasasdasdasdasdasfjahfkjadhd kjashfkjaasdas dasdasdadah</p>
				</div>
			</li>
			<li>
				<a href="#">
					<div class="agregar" data-toggle="modal" data-target="#Agregar">
			    	<i class="glyphicon glyphicon-plus"></i>
					</div>
				</a>
			</li>
		</ul>
	</section>
	</div>
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
	                	<form action="">
						<input type="text" style="border: none;border-bottom: .3px solid #a8a8a8; width: 100%; outline: none; height: 50px; font-size: 2rem;" placeholder="Titulo de la noticia"><br>
						<input type="text" style="border: none;border-bottom: .3px solid #a8a8a8; width: 100%; outline: none; height: 50px; font-size: 2rem;" placeholder="Descripción de la noticia"><br>
						<textarea style="font-family: Arial;font-size: 12pt;width:100%;height:50vh; resize: none;"></textarea>
						</form>
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
	<!--Modal agregar-->
	<div class="modal fade" id="Agregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="vertical-alignment-helper">
	        <div class="modal-dialog vertical-align-center">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cancelar</span>
	                    </button>
	                     <h4 class="modal-title" id="myModalLabel">Agregar</h4>
	                </div>
	                <div class="modal-body">
	                	<form action="">
						<input type="text" style="border: none;border-bottom: .3px solid #a8a8a8; width: 100%; outline: none; height: 50px; font-size: 2rem;" placeholder="Titulo de la noticia"><br>
						<input type="text" style="border: none;border-bottom: .3px solid #a8a8a8; width: 100%; outline: none; height: 50px; font-size: 2rem;" placeholder="Descripción de la noticia"><br>
						<textarea style="font-family: Arial;font-size: 12pt;width:100%;height:50vh; resize: none;" placeholder="Inserte la noticia aqui"></textarea>
						</form>
						<input id="uploadFile" placeholder="Archivo Elegido" disabled="disabled" />
						<div class="fileUpload btn btn-primary">
						    <span>Subir Archivo</span>
						    <input id="uploadBtn" type="file" class="upload" />
						</div>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                    <button type="button" class="btn btn-primary">Agregar</button>
	                </div>
	            </div>
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
	<script src="js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="./js/adminpanel.js"></script>
</body>
</html>
