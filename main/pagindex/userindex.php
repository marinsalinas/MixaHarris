<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel='stylesheet' type='text/css' href = "../../lib/styleAdmin.css">
		<link href='http://fonts.googleapis.com/css?family=Mouse+Memoirs' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="lib/jquery.js"></script>
		<script type="text/javascript" src="lib/lib.js"></script>
		<title>MixaHarris User</title>
	<title>Bienvenido - Usuario</title>
</head>
<body>
	<?php
	session_start();
	//cambie esto y lo puse dentro de la carpeta para evitarnos algunos errores y ademas no reacer codigo
	//como lo de valid
	require_once("../../login/valid.php");
	require_once("../../login/validpriv.php");
	validUser();
	//echo "<h1>MixaHarris - User Index Nuevo </h1>";
	$usuario = $_SESSION['usuario'];
	//print_r($usuario);
	//	echo"<p>"."Bienvenido ".$usuario->clientesNombre;
	?>
	<div id='navegador'>
			<div id='homeLogo'>MixaHarris User Configuracion</div>
				<div id='navAdmin'>	
					Hola, <?php echo $usuario->clientesNombre;?> 
					<form action='../../login/logout.php' id='blogout'>
						<input id='button' type='submit' value='Logout'>	
					</form> 
					<a class="Bca" href="../../main/store/home.php" title="Configurar datos personales">conf</a> 
				 </div>
		</div><!--navegador-->


<center><div id='menuModClientes'>
	<center><h2>MixaHarris</h2></center>
						</br></br>
	<p class='hdm'>Personal:</p>
<ul class='liad'>
	<li><a href='../../formupdate/view/edit_clientes.php'>Modificar mis datos</a></li>
	<li><a href='../../login/pass/cambiar_pass.php'>Cambiar mi contraseña</a></li>
</ul>
</div></center>		


		<section id='sidebar'>
			<nav>
				<figure class="cuadricula">
					<img id="GElectricas" class="botonSeccion" src="../../images/cuadro1.png" onclick="location.href='../../main/store/store.php?seccion=GElectricas'">
				</figure>

				<figure class="cuadricula">
					<img  id="Bajos" class="botonSeccion" src="../../images/cuadro2.png" onclick="location.href='../../main/store/store.php?seccion=Bajos'">
				</figure>
				</figure>

				<figure class="cuadricula">
					<img id="GAcusticas" class="botonSeccion" src="../../images/cuadro3.png" onclick="location.href='../../main/store/store.php?seccion=GAcusticas'">
				</figure>

				<figure class="cuadricula">
					<img id="Baterias" class="botonSeccion" src="../../images/cuadro4.png" onclick="location.href='../../main/store/store.php?seccion=Baterias'">
				</figure>
				<figure class="cuadricula">
					<img id="Teclados" class="botonSeccion" src="../../images/cuadro5.png" onclick="location.href='../../main/store/store.php?seccion=Teclados'">
				</figure>
				</figure>
				<figure class="cuadricula">
					<img id="Viento" class="botonSeccion" src="../../images/cuadro6.png" onclick="location.href='../../main/store/store.php?seccion=Viento'">
				</figure>
				<figure class="cuadricula">
					<img id="Audio" class="botonSeccion" src="../../images/cuadro7.png" onclick="location.href='../../main/store/store.php?seccion=Audio'">
				</figure>
			</nav>
		</section>
</body>
</html>