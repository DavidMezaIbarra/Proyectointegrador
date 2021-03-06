<!DOCTYPE html>
<html lang="es">
<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="./css/estilos.css">
		<link rel="stylesheet" href="./css/animate.css">

	<title>Rancho el milagro</title>
</head>
<body class="animated fadeIn">
	<header>
		<div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
		  <ul class="nav navbar-nav">
				<li><img src="{{asset('/img/logoiglesia.png')}}" class="img-responsive" alt="Responsive image" style="width:50px;heightauto;"></li>
		    <li><img src="{{asset('/img/logo.png')}}" class="img-responsive" alt="Responsive image" style="margin-top: 2%;"></li>
		    <li style="margin-left: -50px;"><a href="#s3" style="color: white;">Inicio</a></li>
		    <li><a href="#s2" style="color: white;">Nosotros</a></li>
		    <li><a href="#s6" style="color: white;">Noticias</a></li>
		    <li><a href="/admin/" style="color: white;"> Admin</a></li>
		  </ul>
		</div>

	</header>
	<section id="s3" class="carolusel slide ">
			<div id="myCarousel" class="carousel slide col-md-13 " data-ride="carousel">
				<div id="myCarousel" class="carousel slide col-md-13" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active responsive-slider image-1" style="height: 100vh;filter: brightness(65%); " >
						</div>

						<div class="item responsive-slider image-2" style="height: 100vh;filter: brightness(65%); ">

						</div>

						<div class="item responsive-slider image-3" style="height: 100vh;filter: brightness(65%);">
							<img src="{{asset('./img/slider3.jpg')}}" alt="New York" style="height: 100%; width: 100%">
						</div>
					</div>
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
	</section>
	<section id="s2" class="container-fluid col-md-12">
		<div class="container col-md-12 col-lg-12" style="height: auto;">

				<p id="nosotros">Nosotros</p>
			<p class="parrafo col-xs-offset-1 col-md-offset-1" style="width:80%;text-align:justify; height:auto;">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			</p>
		</div>
	</section>


	<div id="bg"></div>

	<section id="s1">
		<h1 style="font-weight:800;font-size:5rem;margin-top: 20%;" >Rancho el Milagro</h1>
		<p><strong>Rancho el milagro</strong> donde los pacientes son nuestro mejor libro de texto</p>
		<a href="#s4"><button class="lbl  btnmore  animated fadeInDown" ></button></a>
	</section>



	<div id="s4bg"></div>
	<div id="s3bg"></div>
	<section id="s4" style="height: auto;text-align: justify;">
		<p class="titulo" style="text-align:center;font-size:2.5rem;">Proposito</p>
		<p class="parrafo parrafo col-xs-offset-1 col-md-offset-1" style="width:80%;text-align:justify; height:auto;font-size:2rem;">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	</section>
	<section id="s5">
	</section>
<section id="s6" style="height: auto;">
	<ul class="container">
		<div><p class="titulo" style="text-align: center;font-size: 5rem;">Noticias</p></div>
		@forelse($noticias as $reg)
					<li>
				<div class="modalclic" style="width:360px;border-radius:10px;"  data-text="{{$reg->Noticia}}">
					<div class="wrapper" style="margin-left:5px;">
						<a href="#s6">
							<div class="agregar" data-toggle="modal" data-target="#editar">
								<img src="{{asset('/img/noticias/'.$reg->Imagen)}}" width="350px" height="350px" style="background-size:cover;border-radius:10px;"/>
							</div>
						</a>

					 </div>
				  <div class="wrapper modalclic2" style="height:120px;">
				    	<span class="edit" data-toggle="modal" data-target="#editar"></span>
					    <p id="1" class="titulo">{{$reg->Titulo_noticia}}</p>
					    <h2 id="2" class="parrafo" style="">{{$reg->Descripcion_noticia}}</h2>
					</div>
					<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					    <div class="vertical-alignment-helper">
					        <div class="modal-dialog vertical-align-center">
					            <div class="">
					                <div class="modal-header" style="border:none;margin-bottom:-5%;">
					                    <button type="button" class="close" data-dismiss="modal" style="color:white;"><span aria-hidden="true"style="color:white;font-size:2rem;">X</span><span class="sr-only" style="color:white;">Cancelar</span>
					                    </button>
					                     <h4 class="modal-title" id="titlemodal" style="color:white;">{{$reg->Titulo_noticia}}</h4>
					                </div>
					                <div class="modal-body">
														<img id="imagenmodal"src="{{asset('/img/noticias/'.$reg->Imagen)}}" style="display:block;margin:auto;background-color:white;max-width:100%;max-height:100%;">

													</div>
					                <div class="modal-footer" style="background-color:white;">
														<div class="parrafo" id="bodylabel"style="color:#525963;font-family:raleway;">
																{{$reg->Noticia}}
														</div>
					                </div>
					            </div>
					        </div>
					    </div>
					</div>


					@empty
						<p>Sin registros</p>
					@endforelse
					</div>
				</li>

				<li>

				</li>
	</ul>


</section>

	<section id="s7" style="padding-top: 100px;background-color:#eff3f9;height:300px;">
		<div class="container col-md-12 col-xs-12">
			<div class="row" >
				<div class="col-md-1 col-xs-1 col-md-offset-4 col-xs-offset-4 fb">
					<div id="fb"></div>
				</div>
				<div class="col-md-1 col-xs-1 tw ">
					<div id="tw"></div>
				</div>
				<div class="col-md-1 col-xs-1 insta ">
					<div id="insta"></div>
				</div>
				<div class="col-md-1 col-xs-1 yt ">
					<div id="yt"></div>
				</div>
			</div>
			<div class=" row col-md-12 " style="margin-top:2%; text-align:center;">
				<p class="about">Instituto Blas Pascal</p>
				<p class="about">Libramiento Gomez Morin N°1000 local 7-A,  · 01 636 694 7747</p>
				<p class="about">Nuevo Casas Grandes, Chihuahua</p>
				<p class="about">01 636 694 7747</p>
			</div>
		</div>
	</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script>
$(document).ready(function(){
  $('a[href^="#s"]').on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1000, function(){
        window.location.hash = hash;
      });
    } // End if
  });
	$('.modalclic').on('click',function(event){
		var ruta = $(this).find('img').attr('src');
		$('#imagenmodal').attr('src',ruta);

		var ruta2=$(this).find('p').text();
		$('#titlemodal').text(ruta2);

		var ruta3=$(this).attr('data-text');
		$('#bodylabel').text(ruta3);
	});
});
</script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script type="text/javascript" src="./js/scroll.js"></script>
<script type="text/javascript" src="./js/nav.js"></script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>
