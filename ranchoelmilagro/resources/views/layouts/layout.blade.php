<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" >
  	<link rel="stylesheet" href="{{asset('/css/estilos.css')}}">
  	<link rel="stylesheet" href="{{asset('/css/adminpanel.css')}}">
  	<link rel="stylesheet" href="{{asset('/css/perfil.css')}}">
  	<meta charset="UTF-8">
  	<title>Panel de Administración</title>
</head>
<body>
      <d  iv class="">
        @yield('content')
      </div>

            <!-- Scripts -->
@yield('scripts')
<script type="text/javascript">


</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="{{('/js/adminpanel.js')}}"></script>

</body>
</html>
