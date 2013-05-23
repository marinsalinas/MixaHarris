<!DOCTYPE html>
<html lang='es'>
<head>
	<?php
	session_start();
	require_once("../../login/valid.php");
	require_once("../../login/validpriv.php");
	require_once("../lib/edit_lib.php");
	validAdmin();
	$idusr=$_POST['id']; //este es el valor del id del usuario del post con el campo hidden
	$admin = $_SESSION['usuario'];
	?>
	<meta charset='utf-8'/>
	<meta name='description' content=''/>
	<meta http-equiv='X-UA-Compatible' content='IE=edge, chrome=1'/>
	<link rel='stylesheet' type='text/css' href = "../../lib/styleAdmin.css">
	<link href='http://fonts.googleapis.com/css?family=Mouse+Memoirs' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="lib/jquery.js"></script>
	<script type="text/javascript" src="lib/lib.js"></script>
<title>MixaHarris - Modificar Registros de Clientes</title>
<body>

	<div id='navegador'>
			<div id='homeLogo'>MixaHarris Administrador - Modificar Cliente</div>
				<div id='navAdmin'>	
					Hola, <?php echo $admin->administradorNombre;?> 
					<form action='../../login/logout.php' id='blogout'>
						<input id='button' type='submit' value='Logout'>	
					</form> 
					<a class="Bca" href="../../main/pagindex/adminindex.php" title="Menú administrador">conf</a> 
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

	echo "<p>";
	updateClienteConID($clienteModif, $idusr);
	echo"<p>";
	?>	
</br></br></br>
	<a id='aFondo' href='../../reportes/action/cliente.php'>Aceptar</a>
	</div></center>
</body>
</hmtl>