<!DOCTYPE html>
<html lang='es'>
<head>
	<?php
	session_start();
	require_once("../../login/valid.php");
	require_once("../../login/validpriv.php");
	require_once("../lib/edit_lib.php");
	validUser();
	$idusr=$_SESSION['usuario']->idclientes; //este es el valor del id del usuario en esta sesion
	$usrModif = selectClienteConID($idusr);
	$usuario = $_SESSION['usuario'];
	/*echo"<pre>";
	print_r($usrModif);
	echo"</pre>";*/
	?>
	<meta charset='utf-8'/>
	<meta name='description' content=''/>
	<meta http-equiv='X-UA-Compatible' content='IE=edge, chrome=1'/>
	<link rel='stylesheet' type='text/css' href = "../../lib/styleAdmin.css">
		<link href='http://fonts.googleapis.com/css?family=Mouse+Memoirs' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="lib/jquery.js"></script>
		<script type="text/javascript" src="lib/lib.js"></script>
		<title>MixaHarris User</title>
<title>MixaHarris - Formulario Clientes</title>

<title>MixaHarris - Modificar Registros de Clientes</title>
<body>


	<div id='navegador'>
			<div id='homeLogo' onclick="location.href='../../main/store/home.php'">MixaHarris User</div>
				<div id='navAdmin'>	
					Hola, <?php echo $usuario->clientesNombre;?> 
					<form action='../../login/logout.php' id='blogout'>
						<input id='button' type='submit' value='Logout'>	
					</form> 
					<a class="Bca" href="../../main/pagindex/userindex.php" title="Configurar datos personales">conf</a> 
				 </div>
		</div><!--navegador-->

<center><div id='menuModClientes'>
	<center><h2>MixaHarris</h2></center>
						</br></br>
							<p class='hdm'></p>


	<?php
	$clienteModif=array();
	$datosCliente= array("nombre","apellidos", "direccion","CP","email", "tel", "username", "cel", "ocupacion",
	 "sexo");//se obtiene de los names del formulario
	foreach($datosCliente as $key => $datoCliente){
	$clienteModif[]= $_POST[$datoCliente];
	}
	$clienteModif[]=$_POST['anio']."-".$_POST['mes']."-".$_POST['dia'];//Concatena para tener el formato "YYYY-mm-dd" para BD
	
	/*echo "<pre>";
	print_r($clienteModif);
	echo "</pre>";*/
	//echo "<p>";
	echo "</br></br>";
	updateClienteConID($clienteModif, $_SESSION['usuario']->idclientes);
	echo "</br></br>";
	//echo"<p>";
	?>

	<a id='aFondo' href='../../main/store/home.php'>Aceptar</a>
			</div></center>	
</body>
</hmtl>