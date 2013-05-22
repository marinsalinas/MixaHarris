<?php
session_start();
require_once("../../login/valid.php");
require_once("../../login/validpriv.php");
require_once("../lib/edit_lib.php");
validAdmin();
$usrModif = selectClienteConID($_GET['id']);
$admin = $_SESSION['usuario'];
/*echo"<pre>";
print_r($usrModif);
echo "</pre>";*/
?>
<html>
	<meta charset='utf-8'/>
	<meta name='description' content=''/>
	<meta http-equiv='X-UA-Compatible' content='IE=edge, chrome=1'/>
	<link rel='stylesheet' type='text/css' href = "../../lib/styleAdmin.css">
	<link href='http://fonts.googleapis.com/css?family=Mouse+Memoirs' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="lib/jquery.js"></script>
	<script type="text/javascript" src="lib/lib.js"></script>
<title>MixaHarris - Formulario Clientes</title>
<body>
	

	<div id='navegador'>
			<div id='homeLogo'>MixaHarris Administrador - Modificar Cliente</div>
				<div id='navAdmin'>	
					Hola, <?php echo $admin->administradorNombre;?> 
					<form action='../../login/logout.php' id='blogout'>
						<input id='modbutton' type='submit' value='Logout'>	
					</form> 
					<a class="Bca" href="../../main/pagindex/adminindex.php" title="Menú administrador">conf</a> 
				 </div>
		</div><!--navegador-->

<center><div id='menuModClientes'>
	<center><h2>MixaHarris</h2></center>
						</br></br>
							<p class='hdm'>Editar datos</p>
	<table id="tablaModCliente">
		<form name='editClientesRep' action="../action/save_clientesEditRep.php" method='post' accept-charset='utf-8'>
			<tr><th>Nombre(s):</th><td>
				<input type='text' name='nombre' value=<?php echo "'".$usrModif->clientesNombre."'"; ?>/></td></tr>
			<tr><th>Apellido(s):</th><td>
				<input type='text' name='apellidos' value=<?php echo "'".$usrModif->clientesApellido."'"; ?>/></td></tr>
			<tr><th>Nombre de Usuario:</th><td>
				<input type='text' name='username' value=<?php echo "'".$usrModif->clientesUsername."'"; ?>/></td></tr>
			<tr><th>Direcci&oacute;n:</th><td>
				<input type='text' name='direccion' value=<?php echo "'".$usrModif->clientesDireccion."'";?>/></td></tr>
			<tr><th>C&oacute;digo Postal:</th><td>
				<input type='number' name='CP' value=<?php echo "'".$usrModif->clientesCP."'"; ?>/></td></tr>
			<tr><th>Email:</th><td>
				<input type='email' name='email' value=<?php echo "'".$usrModif->clientesEmail."'"; ?>/></td></tr>
			<tr><th>Tel&eacute;fono:</th><td>
				<input type='number' name='tel' value=<?php echo "'".$usrModif->clientesTelefono."'"; ?>/></td></tr>
			<tr><th>M&oacute;vil:</th><td>
				<input type='number' name='cel' value=<?php echo "'".$usrModif->clientesCelular."'"; ?>/></td></tr>
			<tr><th>Ocupaci&oacute;n:</th><td>
				<input type='text' name='ocupacion' value=<?php echo "'".$usrModif->clientesOcupacion."'";?>/></td></tr>
			<tr><th>Fecha de Nacimiento:</th>
				<td>
				<?php
				/*Script PHP el cual nos ayuda a llenar mas rapidamente los dropdown-list*/
				$nac = array();
				$nac =explode("-", $usrModif->clientesNacimiento);
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
			<tr><th>Sexo:</th>
				<?php
				$sexo = $usrModif->clientesSexo;
				if($sexo == 'F'){
				echo "<td>"."<input type='radio' name='sexo' value='F' checked/><div class='modsexo'>Mujer\n</div>";
				echo "<input type='radio' name='sexo' value='M' /><div class='modsexo'>Hombre\n</div></td>\n";
				}else{
				echo "<td>"."<input type='radio' name='sexo' value='F'/><div class='modsexo'>Mujer\n</div>";
				echo "<input type='radio' name='sexo' value='M' checked/><div class='modsexo'>Hombre\n</div></td>\n";
				}
				//este campo es oculto de donde en el archivo del formulario obtengo el id sin que se me muestre
				echo "<input type='hidden' name ='id' value='".$usrModif->idclientes."''>";

				/* **NOTA** la vida de un Script de php  vive por archivo por eso puedes abrir y cerrar en
				 *			varias ocaciones de tal forma que vuelve mas entendible el código
				 */
				?>
			</tr>
			<tr><td colspan='2'><center><input id='button' type='submit'value='Aceptar'/><center></td></tr>
		</form>
	</table>
	</div></center>
</body>
</hmtl>