<!DOCTYPE html>
<html lang='es'>
<html>
<head>
	<meta charset='utf-8'/>
	<meta name='description' content=''/>
	<meta http-equiv='X-UA-Compatible' content='IE=edge, chrome=1'/>
	<link rel='stylesheet' type='text/css' href = "../../lib/styleAdmin.css">
	<link href='http://fonts.googleapis.com/css?family=Mouse+Memoirs' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="lib/jquery.js"></script>
	<script type="text/javascript" src="lib/lib.js"></script>
	
<title>MixaHarris - Alta Clientes</title>
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
			<div id='homeLogo'>MixaHarris Administrador - Alta Clientes</div>
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
	<table id="tablaAltaCliente">
		<form name='altasClientes' action="../action/save_clientes.php" method='post' accept-charset='utf-8'>
			<tr><th>Nombre(s):</th><td><input type='text' name='nombre'/></td></tr>
			<tr><th>Apellido(s):</th><td><input type='text' name='apellidos'/></td></tr>
			<tr><th>Nombre de Usuario:</th><td><input type='text' name='username'/></td></tr>
			<tr><th>Contrase&ntilde;a:</th><td><input type='password' name='pass'/></td></tr>
			<tr><th>Direcci&oacute;n:</th><td><input type='text' name='direccion'/></td></tr>
			<tr><th>C&oacute;digo Postal:</th><td><input type='number' name='CP'/></td></tr>
			<tr><th>Email:</th><td><input type='email' name='email'/></td></tr>
			<tr><th>Tel&eacute;fono:</th><td><input type='number' name='tel'/></td></tr>
			<tr><th>M&oacute;vil:</th><td><input type='number' name='cel'/></td></tr>
			<tr><th>Ocupaci&oacute;n:</th><td><input type='text' name='ocupacion'/></td></tr>
			<tr><th>Fecha de Nacimiento:</th>
				<td>
					<?php
					/*Script PHP el cual nos ayuda a llenar mas rapidamente los dropdown-list*/
					echo"<select name='dia'>\n";
					echo"<option value='-1'>D&iacute;a:</option>\n";
					
					$meses= array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
						for ($i=1; $i <= 31; $i++) { 
						echo"<option value='".$i."'>".$i."</option>\n";
						}
					echo"</select>\n";
					echo"<select name='mes'>\n";
					echo"<option value='-1'>Mes:</option>\n";
					$i=1;
					foreach ($meses as $key => $mes) {
					echo"<option value='".$i."'>".$mes."</option>\n"; $i++;
					}
					echo"</select>\n";
					echo"<select name='anio'>\n";
					echo"<option value='-1'>A&ntilde;o:</option>\n";
						for ($i=date("Y"); $i>=1900; $i--) {
							echo"<option value='".$i."'>".$i."</option>\n";
						}
					echo"</select>\n";
					?>	
				</td>
			</tr>
			<tr><th>Sexo:</th>
				<td><input type='radio' name='sexo' value='F' /><div class="sexo">Mujer</div>
				<input type='radio'name='sexo' value='M' /><div class="sexo">Hombre</div></td>
			</tr>
			<tr><td colspan="2"><center><input  id='button' type='submit'value='Aceptar'/></center></td></tr>
		</form>
	</table>

</div></center><!--Div de menu-->
</body>
</hmtl>