<!DOCTYPE html>
<html lang='es'>
<html>
<head>
	<meta charset='utf-8'/>
	<meta name='description' content=''/>
	<meta http-equiv='X-UA-Compatible' content='IE=edge, chrome=1'/>
<title>Formulario Clientes</title>
<body>
	<h1>Formularios Altas</h1>
	<table>
		<form name='altasClientes' action="../action/save_clientes.php" method='post'>
			<tr><td>Nombre(s):</td><td><input type='text' name='nombre'/></td></tr>
			<tr><td>Apellido(s):</td><td><input type='text' name='appelidos'/></td></tr>
			<tr><td>Nombre de Usuario:</td><td><input type='text' name='username'/></td></tr>
			<tr><td>Contrase&ntilde;a:</td><td><input type='password' name='pass'/></td></tr>
			<tr><td>Direcci&oacute;n:</td><td><input type='text' name='direccion'/></td></tr>
			<tr><td>C&oacute;digo Postal:</td><td><input type='text' name='CP'/></td></tr>
			<tr><td>Email:</td><td><input type='text' name='email'/></td></tr>
			<tr><td>Tel&eacute;fono:</td><td><input type='text' name='tel'/></td></tr>
			<tr><td>M&oacute;vil:</td><td><input type='text' name='cel'/></td></tr>
			<tr><td>Ocupaci&oacute;n:</td><td><input type='text' name='ocupacion'/></td></tr>
			<tr><td>Fecha de Nacimiento:</td>
				<td>
					<?php
					echo"<select name='dia'>\n";
					echo"<option value='-1'>D&iacute;a:</option>\n";
					
					$meses= array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
						for ($i=1; $i <= 12 ; $i++) { 
						echo"<option value='".$i."'>".$i."</option>\n";
						}
					echo"</select>\n";
					echo"<select name='mes'>\n";
					echo"<option value='-1'>Mes:</option>\n";
					$i=1;
					foreach ($meses as $key => $mes) {
					echo"<option value='".$i."'>".$mes."</option>\n";
					}
					echo"</select name='anio'>\n";
					echo"<select>\n";
					echo"<option value='-1'>A&ntilde;o:</option>\n";
						for ($i=date("Y"); $i>=1900; $i--) {
							echo"<option value='".$i."'>".$i."</option>\n";
						}
					echo"</select>\n";
					?>	
				</td>
			</tr>
			<tr><td><input type='submit'value='Aceptar'/></td></tr>
		</form>
	</table>
</body>
</hmtl>