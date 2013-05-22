<!DOCTYPE html>
<html lang='es'>
<html>
<head>
	<meta charset='utf-8'/>
	<meta name='description' content=''/>
	<meta http-equiv='X-UA-Compatible' content='IE=edge, chrome=1'/>
	<link rel='stylesheet' type='text/css' href = "../../lib/stylePro.css">
	<link href='http://fonts.googleapis.com/css?family=Mouse+Memoirs' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="lib/jquery.js"></script>
	<script type="text/javascript" src="lib/lib.js"></script>
<title>MixaHarris - Alta Proveedores</title>

<body>
	<?php
	session_start();
	//lo mismo
	require_once("../../login/valid.php");
	require_once("../../login/validpriv.php");
	validAdmin();
	//echo "<h1>MixaHarris - Admin Index Nuevo </h1>";
	$admin = $_SESSION['usuario'];
	//print_r($usuario);
	//echo "<div id='navegador'>";
		//echo"<p>"."Bienvenido ".$admin->administradorNombre."<a href='../../login/logout.php'>Logout</a></p>";
	//echo "</div>";
	?>
	<div id='navegador'>
			<div id='homeLogo'>MixaHarris Administrador - Alta Proveedores</div>
				<div id='navAdmin'>	
					Hola, <?php echo $admin->administradorNombre;?> 
					<form action='../../login/logout.php' id='blogout'>
						<input id='button' type='submit' value='Logout'>	
					</form> 
					<a class="Bca" href="../../main/pagindex/adminindex.php" title="Menú administrador">conf</a> 
				 </div>
		</div><!--navegador-->
<center><div id='menuAltaClientes'>
	<center><h2>MixaHarris</h2></center>
						</br></br>
							<p class='hdm'>Alta de Usuarios</p>



	<table id='tablaModCliente'>
		<form name='altasProveedor' action="../action/save_proveedores.php" method='post' accept-charset='utf-8'>
			<tr><td>Nombre del proveedor:</td><td><input type='text' name='nombre'/></td></tr>
			<tr><td>Nombre del contacto:</td><td><input type='text' name='contacto'/></td></tr>
			<tr><td>Tel&eacute;fono:</td><td><input type='tel' name='tel'/></td></tr>
			<tr><td colspan='2'></br><center><input id='button' type='submit'value='Aceptar'/></center></td></tr>
		</form>
	</table>

</div></center><!--Div de menu-->
</body>

</hmtl>