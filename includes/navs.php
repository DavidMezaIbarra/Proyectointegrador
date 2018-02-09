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
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Menú</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="./img/logo.png" class="img-responsive" alt="Responsive image" style="margin-top: 2%;width:100%;height:100%;"></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Principal<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
        <li ><a href="#">Noticias<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></span></a></li>
        <li ><a href="#">Sesión<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
        <li class="dropdown" onclick="abrirMenu()" id="open">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Configuración <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
