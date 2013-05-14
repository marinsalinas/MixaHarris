<!DOCTYPE html>
<html lang='es'>
<head>
	<?php
	session_start();
	require_once("../../login/valid.php");
	require_once("../../login/validpriv.php");
	require_once("../lib/edit_lib.php");
	validAdmin();
	$adminID =  $_SESSION['usuario']->idadministrador; //este es el valor del id del administrador en esta sesion
	$adModif = selectAdminConID($adminID);
	echo"<pre>";
	print_r($adModif);
	echo"</pre>";
	?>
	<meta charset='utf-8'/>
	<meta name='description' content=''/>
	<meta http-equiv='X-UA-Compatible' content='IE=edge, chrome=1'/>
<title>MixaHarris - Formulario Clientes</title>
<body>
	<h1>Modificar Registro del Ciente</h1>
	<table>
		<form name='editAdmin' action="../action/save_adminEdit.php" method='post' accept-charset='utf-8'>
			<tr><td>Nombre(s):</td><td>
				<input type='text' name='nombre' value=<?php echo "'".$adModif->administradorNombre."'";?>/></td></tr>
			<tr><td>Apellido(s):</td><td>
				<input type='text' name='apellidos' value=<?php echo "'".$adModif->administradorApellido."'";?>/></td></tr>
			<tr><td>Nombre de Usuario:</td><td>
				<input type='text' name='username' value=<?php echo "'".$adModif->administradorUsername."'"; ?>/></td></tr>
			<tr><td>Email:</td><td>
				<input type='email' name='email' value=<?php echo "'".$adModif->administradorEmail."'"; ?>/></td></tr>
			<tr><td>Tel&eacute;fono:</td><td>
				<input type='number' name='tel' value=<?php echo "'".$adModif->administradorTelefono."'"; ?>/></td></tr>
			<tr><td>Fecha de Nacimiento:</td>
				<td>
				<?php
				/*Script PHP el cual nos ayuda a llenar mas rapidamente los dropdown-list*/
				$nac = array();
				$nac =explode("-", $adModif->administradorNacimiento);
				echo"<select name='dia'>\n";
				echo"<option value='-1'>D&iacute;a:</option>\n";
					
				$meses= array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
				for ($i=1; $i <= 31; $i++) { 
				if($i == $nac[2])//condicion para la opcion selecionada
					echo"<option value='".$i."' selected>".$i."</option>\n";
				else
					echo"<option value='".$i."'>".$i."</option>\n";		
				}
				echo"</select>\n";
				echo"<select name='mes'>\n";
				echo"<option value='-1'>Mes:</option>\n";
				$i=1;
				foreach ($meses as $key => $mes) {
					if($i == $nac[1])
					{echo"<option value='".$i."' selected>".$mes."</option>\n"; $i++;}	
					else{echo"<option value='".$i."'>".$mes."</option>\n"; $i++;}
				}
				echo"</select>\n";
				echo"<select name='anio'>\n";
				echo"<option value='-1'>A&ntilde;o:</option>\n";
				for ($i=date("Y"); $i>=1900; $i--) {
					if($i == $nac[0]){
						echo"<option value='".$i."' selected>".$i."</option>\n";}
					else{
						echo"<option value='".$i."'>".$i."</option>\n";}
				}
				echo"</select>\n";
				?>	
				</td>
			</tr>
			<tr><td>Sexo:</td>
				<?php
				$sexo = $adModif->administradorSexo;
				if($sexo == 'F'){
				echo "<td>"."<input type='radio' name='sexo' value='F' checked/>"."Mujer\n";
				echo "<input type='radio' name='sexo' value='M' />Hombre</td>\n";
				}else if ($sexo == 'M'){
				echo "<td>"."<input type='radio' name='sexo' value='F'/>Mujer\n";
				echo "<input type='radio' name='sexo' value='M' checked/>Hombre</td>\n";
				}else{
					echo "<td>"."<input type='radio' name='sexo' value='F'/>Mujer\n";
					echo "<input type='radio' name='sexo' value='M'/>Hombre</td>\n";
				}

				/* **NOTA** la vida de un Script de php  vive por archivo por eso puedes abrir y cerrar en
				 *			varias ocaciones de tal forma que vuelve mas entendible el código
				 */
				?>
			</tr>
			<tr><td><input type='submit'value='Aceptar'/></td></tr>
		</form>
	</table>
</body>
</hmtl>