<?php
session_start();
require_once("../../login/valid.php");
require_once("../../login/validpriv.php");
require_once("../lib/edit_lib.php");
require_once('../../formulario/lib/formularios_lib.php');
$prodModif= selectProductoConID($_GET['id']);
$admin = $_SESSION['usuario'];
?>
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
<title>MixaHarris - Editar Productos</title>
<body>

	<div id='navegador'>
			<div id='homeLogo'>MixaHarris Administrador - Modificar Producto</div>
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
							<p class='hdm'>Editar datos</p>
	<table id="tablaModCliente">
		<form name='UpdateProductos' action="../action/save_productosEdit.php" method='post' accept-charset='utf-8'>
			<input type='hidden' name ='id' value=<?php echo "'".$prodModif->idproductos."'" //es para el id ?> />
			<tr><th>Nombre de Producto:</th><td>
				<input type='text' name='nombre' value=<?php echo "'".$prodModif->productosNombre."'"?>/></td></tr>
			<tr><th>Marca:</th><td>
				<input type='text' name='marca' value=<?php echo "'".$prodModif->productosMarca."'"?>/></td></tr>
			<tr><th>Modelo:</th><td>
				<input type='text' name='modelo' value=<?php echo "'".$prodModif->productosModelo."'"?>/></td></tr>
			<tr><th>Descripci&oacute;n:</th><td>
				<input type='text' name='descripcion' value=<?php echo "'".$prodModif->productosDescripcion."'"?>/></td></tr>
			<tr><th>Precio:</th><td><input type='text' name='precio' value=<?php echo "'".$prodModif->productosPrecio."'"?>/></td></tr>
			<tr><th>Tipo:</th><td><select name='tipo'>
					<?php
					switch ($prodModif->productosTipo) {
						case "GElectricas":
						echo "
						<option value='GElectricas' selected>Guitarras El&eacute;ctricas</option>
						<option value='Bajos'>Bajos</option>
						<option value='GAcusticas'>Guitarras Ac&uacute;sticas</option>
						<option value='Baterias'>Baterias</option>
						<option value='Teclados'>Teclados</option>
						<option value='Viento'>Instrumentos de viento</option>
						<option value='Audio'>Audio y m&aacute;s</option>";
						break;
						
						case "Bajos":
						echo "
						<option value='GElectricas'>Guitarras El&eacute;ctricas</option>
						<option value='Bajos' selected>Bajos</option>
						<option value='GAcusticas'>Guitarras Ac&uacute;sticas</option>
						<option value='Baterias'>Baterias</option>
						<option value='Teclados'>Teclados</option>
						<option value='Viento'>Instrumentos de viento</option>
						<option value='Audio'>Audio y m&aacute;s</option>";
						break;

						case "GAcusticas":
						echo "
						<option value='GElectricas'>Guitarras El&eacute;ctricas</option>
						<option value='Bajos'>Bajos</option>
						<option value='GAcusticas' selected>Guitarras Ac&uacute;sticas</option>
						<option value='Baterias'>Baterias</option>
						<option value='Teclados'>Teclados</option>
						<option value='Viento'>Instrumentos de viento</option>
						<option value='Audio'>Audio y m&aacute;s</option>";
						break;

						case "Baterias":
						echo "
						<option value='GElectricas'>Guitarras El&eacute;ctricas</option>
						<option value='Bajos'>Bajos</option>
						<option value='GAcusticas'>Guitarras Ac&uacute;sticas</option>
						<option value='Baterias' selected>Baterias</option>
						<option value='Teclados'>Teclados</option>
						<option value='Viento'>Instrumentos de viento</option>
						<option value='Audio'>Audio y m&aacute;s</option>";
						break;

						case "Teclados":
						echo "
						<option value='GElectricas'>Guitarras El&eacute;ctricas</option>
						<option value='Bajos'>Bajos</option>
						<option value='GAcusticas'>Guitarras Ac&uacute;sticas</option>
						<option value='Baterias'>Baterias</option>
						<option value='Teclados' selected>Teclados</option>
						<option value='Viento'>Instrumentos de viento</option>
						<option value='Audio'>Audio y m&aacute;s</option>";
						break;

						case "Viento":
						echo "
						<option value='GElectricas'>Guitarras El&eacute;ctricas</option>
						<option value='Bajos'>Bajos</option>
						<option value='GAcusticas'>Guitarras Ac&uacute;sticas</option>
						<option value='Baterias'>Baterias</option>
						<option value='Teclados'>Teclados</option>
						<option value='Viento' selected>Instrumentos de viento</option>
						<option value='Audio'>Audio y m&aacute;s</option>";
						break;

						case "Audio":
						echo "
						<option value='GElectricas'>Guitarras El&eacute;ctricas</option>
						<option value='Bajos'>Bajos</option>
						<option value='GAcusticas'>Guitarras Ac&uacute;sticas</option>
						<option value='Baterias'>Baterias</option>
						<option value='Teclados'>Teclados</option>
						<option value='Viento'>Instrumentos de viento</option>
						<option value='Audio' selected>Audio y m&aacute;s</option>";
						break;

						default:
						echo "
						<option value='GElectricas'>Guitarras El&eacute;ctricas</option>
						<option value='Bajos'>Bajos</option>
						<option value='GAcusticas'>Guitarras Ac&uacute;sticas</option>
						<option value='Baterias'>Baterias</option>
						<option value='Teclados'>Teclados</option>
						<option value='Viento'>Instrumentos de viento</option>
						<option value='Audio'>Audio y m&aacute;s</option>";
						break;
					}


					
					?>
				</select></td></tr>
			<tr><th>Garantia:</th>
				<?php
				if($prodModif->productosGarantia == 1){
				echo "<td><input type='radio' name='garantia' value='1' checked/>Si";
				echo "<input type='radio' name='garantia' value='0' />No</td>";
				} elseif ($prodModif->productosGarantia == 0){
					echo "<td><input type='radio' name='garantia' value='1'/>Si";
				echo "<input type='radio' name='garantia' value='0' checked/>No</td>";
				}else{
					echo "<td><input type='radio' name='garantia' value='1'/>Si";
				echo "<input type='radio' name='garantia' value='0' />No</td>";
				}
				?>
			</tr>
			<tr><th>Proveedor:</th><td>
				<select name='proveedor'>
					<option value ='-1'>Selecciona un proveedor</option>
					<?php
					//como ya hice al principio el require no es necesario volverlo a hacer para la funcion de drop
					$pro = drop_proveedores();
					foreach($pro as $key =>$prv){
						if ($prv->idproveedor == $prodModif->proveedor_idproveedor){
							echo "<option value ='{$prv->idproveedor}' selected>{$prv->proveedorNombre}</option>";}
						else{
							echo "<option value ='{$prv->idproveedor}'>{$prv->proveedorNombre}</option>";}
					}// esto nos ayuda e elegir el proveedor... de manera automatizada
					?>
				</select>
				</td>
			</tr>
			<tr><td colspan='2'><center><input id='button' type='submit'value='Aceptar'/></center></td></tr>
		</form>
	</table>
	</div></center>
</body>
</hmtl>