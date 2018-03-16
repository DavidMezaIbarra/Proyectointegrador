

@extends('layouts.layout')

@section('content')
	<div>
		<header>
			<div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
			  <ul class="nav navbar-nav">
			    <li><img src="{{asset('/img/logo.png')}}" class="img-responsive" alt="Responsive image" style="margin-top: 2%;"></li>
			    <li style="margin-left:600px;"><a href="/" style="color: white;">Inicio</a></li>
					<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="color:white">
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
			    <h1 style="text-align:center;"><strong>Bienvenido</strong> {{ Auth::user()->email }}</h1>
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
										<td>
											<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#editar" >Editar</button>
										</td>
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
					<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					    <div class="vertical-alignment-helper">
					        <div class="modal-dialog vertical-align-center">
					            <div class="modal-content">
					                <div class="modal-header">
					                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cancelar</span>
					                    </button>
					                     <h4 class="modal-title" id="myModalLabel">Editar</h4>
					                </div>
											{!! Form::open( array('route'=>['admin.usuarios.destroy',$usu->id],'method'=>'delete')) !!}
					                <div class="modal-body">
														<div class="input-group">
															<label for="">Nombre</label>
															<input type="text" name="nameEditar" id="nameEditar" value="" class="form-control">
														</div>
														<div class="input-group">
															<label for="">contraseña anterior</label>
															<input type="password" name="pass1Editar" id="pass1Editar" value="" class="form-control">
														</div>
														<div class="input-group">
															<label for="">contraseña nueva</label>
															<input type="password" name="pass2Editar" id="pass3Editar" value="" class="form-control">
														</div>

					                </div>
					                <div class="modal-footer">
					                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
					                    <button type="submit" class="btn btn-danger">Editar</button>
					                </div>
													{{Form::close()}}
					            </div>
					        </div>
					    </div>
					</div>
  		</div>
  	</div>
  </div>
	@endsection
	<!-- Boton de subir archivos -->

@section('scripts')
	
@endsection
