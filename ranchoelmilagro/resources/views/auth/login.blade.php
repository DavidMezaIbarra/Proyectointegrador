@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:10%;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="
            border:none;
            background-color:rgba(177, 181, 188,.6);
            border-radius:0px;
            ">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                      <h1 style="color:white; text-align:center">Inicio de Sesión</h1><br>
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-12 col-md-offset-2 col-sm-12 col-sm-offset-3 col-xs-12 col-xs-offset-3" style="color:white;">Nombre de Usuario</label><br>

                            <div class="col-md-8 col-sm-6 col-xs-6 col-sm-offset-3 col-xs-offset-3 col-md-offset-2">
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus style="
                                border:none;
                                box-shadow:none;
                                background: transparent;
                                border-bottom: 1px solid white;
                                color: rgba(255,255,255,.7);
                                border-radius:0px">
                                <span class="highlight"></span>
                                <span class="bar"></span>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-12 col-md-offset-2 col-sm-12 col-sm-offset-3 col-xs-12 col-xs-offset-3" style="color:white">Contraseña</label>

                            <div class="col-md-8 col-sm-6 col-xs-6 col-sm-offset-3 col-xs-offset-3 col-md-offset-2">
                                <input id="password" type="password" class="form-control" name="password" required style="
                                border:none;
                                box-shadow:none;
                                background: transparent;
                                border-bottom: 1px solid white;
                                color: rgba(255,255,255,.7);
                                border-radius:0px">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group"><br>
                            <div class="col-md-8 col-sm-6 col-xs-6 col-sm-offset-3 col-xs-offset-3 col-md-offset-2 ">
                                <button type="submit" class="btn btn-primary " style="width:100%;">
                                    Iniciar sesion
                                </button><br><br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
