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
<title>MixaHarris - Alta Productos</title>
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
			<div id='homeLogo'>MixaHarris Administrador - Alta Productos</div>
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
							<p class='hdm'>Alta de Productos</p>

	<table id='tablaModCliente'>
		<form name='altasProductos' action="../action/save_productos.php" method='post' accept-charset='utf-8'>
			<tr><th>Nombre de Producto:</th><td><input type='text' name='nombre'/></td></tr>
			<tr><th>Marca:</th><td><input type='text' name='marca'/></td></tr>
			<tr><th>Modelo:</th><td><input type='text' name='modelo'/></td></tr>
			<tr><th>Descripci&oacute;n:</th><td><input type='text' name='descripcion'/></td></tr>
			<tr><th>Precio:</th><td><input type='number' name='precio'/></td></tr>
			<tr><th>Tipo:</th><td>
				<select name='tipo'>
					<option value='GElectricas'>Guitarras El&eacute;ctricas</option>
					<option value='Bajos'>Bajos</option>
					<option value='GAcusticas'>Guitarras Ac&uacute;sticas</option>
					<option value='Baterias'>Baterias</option>
					<option value='Teclados'>Teclados</option>
					<option value='Viento'>Instrumentos de viento</option>
					<option value='Audio'>Audio y m&aacute;s</option>
				</select>
				</td></tr>
				<!--<td><input type='text' name='tipo'/></td></tr>-->
			<tr><th>Garantia:</th>
				<td><input type='radio' name='garantia' value='1' />Si
				<input type='radio' name='garantia' value='0' />No</td>
			</tr>
			<tr><th>Proveedor:</th><td>
				<select name='proveedor'>
					<?php
					require_once('../lib/formularios_lib.php');
					$pro = drop_proveedores();
					foreach($pro as $key =>$prv){
						echo "<option value ='{$prv->idproveedor}'>{$prv->proveedorNombre}</option>";
					}
					?>
				</select>
				</td>
			</tr>
			<tr><td colspan='2'></br><center><input id ='button' type='submit'value='Aceptar'/></center></td></tr>
		</form>
	</table>

</div></center><!--Div de menu-->
</body>
</hmtl>	