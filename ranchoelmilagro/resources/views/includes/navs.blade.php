<nav id="nav" class="navbar navbar-inverse navbar-fixed-top" style="height:70px;background-color: rgba(0,0,0,1);">
  <div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
    <ul class="nav navbar-nav" style="width:100%;">
      <li style="font-size:20px;margin-top:2%;" class="col col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2"><label style="color: white;">Panel de administración</label></li>
      <li style="margin-top: 1.5%;" class="col col-md-2 col-md-offset-3"><div class="divBuscar"><input type="search" name="cosa" id="txtBuscar" placeholder="Buscar..."><span class="glyphicon glyphicon-arrow-right" style="margin-top:0.3%;"></span></div></li>
    </ul>
  </div>
</nav>
<nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="{{asset('/img/logo.png')}}" class="img-responsive" alt="Responsive image" style="margin-top: 2%;width:100%;height:100%;"></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/panelapp">Principal<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
        <li ><a href="#">Noticias<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></span></a></li>
        <li class="dropdown" onclick="abrirMenu()" id="open">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Configuración <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="#">Cuenta</a></li>
            <li><a href="/perfil">Usuarios</a></li>
            <li><a href="#"></a></li>
            <li class="divider"></li>
            <li><a href="/admin/loginapp">Cerrar Sesión</a></li>
            <li class="divider"></li>
            <li><a href="/login">Salir</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
