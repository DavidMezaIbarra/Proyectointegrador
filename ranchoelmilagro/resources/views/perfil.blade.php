<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="./css/estilos.css">
	<link rel="stylesheet" href="./css/adminpanel.css">
	<link rel="stylesheet" href="/css/perfil.css">
	<meta charset="UTF-8">
	<title>Panel de Administración</title>
</head>
<body>
	@extends('/includes/navs')
	<div class="main">
	<!-- Content Here -->
	<section id="s6" style="height: auto;">
    <h1>Bienvenido Administrador</h1>
		<form>
		<ul class="form-style-1">
			<li>
        <label>Usuario</label>
        <select name="field4" class="field-select">
        <option value="Advertise">Admin</option>
        <option value="Partnership">Ramona</option>
        <option value="General Question">Ximena</option>
        </select>
    </li>
		    <li><label>Nombre Usuario <span class="required">*</span></label><input type="text" placeholder="Ingrese el nuevo nombre" name="field1" class="field-long" placeholder="First" />&nbsp;</li>
		    <li>
		        <label>Cambiar contraseña <span class="required">*</span></label>
		        <input type="checkbox" name="field3" />
		    </li>
		    <li>
		        <label>Contraseña anterior <span class="required">*</span> </label>
		        <input type="password" name="" value="" class="field-long">
		    </li>
				<li>
		        <label>Nueva contraseña <span class="required">*</span> </label>
		        <input type="password" name="" value="" class="field-long">
		    </li>
				<li>
		        <label>Verificar contraseña <span class="required">*</span> </label>
		        <input type="password" name="" value="" class="field-long">
		    </li>

		    <li>
		        <input type="submit" value="Submit" />
		    </li>
		</ul>
		</form>
  </section>
  </div>
	<!-- Boton de subir archivos -->

	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="./js/adminpanel.js"></script>
</body>
</html>
