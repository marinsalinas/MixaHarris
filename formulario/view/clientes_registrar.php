<!DOCTYPE html>
<html lang='es'>
<html>
<head>
	<meta charset='utf-8'/>
	<meta name='description' content=''/>
	<meta http-equiv='X-UA-Compatible' content='IE=edge, chrome=1'/>
	<link rel='stylesheet' type='text/css' href = "../../lib/styleUser.css">
	<link href='http://fonts.googleapis.com/css?family=Mouse+Memoirs' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="../../lib/jquery.js"></script>
	<script type="text/javascript" src="../../lib/lib.js"></script>
	
<title>MixaHarris - Registro</title>
<body>


	<div id='navegador'>
			<div id='homeLogo' onclick="location.href='../../index.html'">MixaHarris Home</div>
			<div id='login'>	
				<form id='lin' name='LogIN' action="../../login/loginvalidate.php" method='post' accept-charset='utf-8'>
				Entrar como: <select name='tipoLogin' id='tipoLogin'><option value='1'>Cliente</option><option value='0'>Admin</option></select>
				Usuario: <input class='form' type='text' name='user' id='user'>
				Contraseña: <input class='form' type='password' name='pass' id='pass'>
				 <input id='button' type='button' value='Aceptar' onclick='login();'></form>
			</div>
		</div>

<center><div id='menuAltaClientes'>
	<center><h2>MixaHarris</h2></center>
						</br></br>
							<p class='hdm'>Registro</p>
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