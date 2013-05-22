<?php
require_once("../lib/edit_lib.php");
require_once('../../formulario/lib/formularios_lib.php');
$prodModif= selectProductoConID($_GET['id']);
?>
<!DOCTYPE html>
<html lang='es'>
<html>
<head>
	<meta charset='utf-8'/>
	<meta name='description' content=''/>
	<meta http-equiv='X-UA-Compatible' content='IE=edge, chrome=1'/>
<title>MixaHarris - Editar Productos</title>
<body>
	<h1>Formularios para Modificar Productos</h1>
	<table>
		<form name='UpdateProductos' action="../action/save_productosEdit.php" method='post' accept-charset='utf-8'>
			<input type='hidden' name ='id' value=<?php echo "'".$prodModif->idproductos."'" //es para el id ?> />
			<tr><td>Nombre de Producto:</td><td>
				<input type='text' name='nombre' value=<?php echo "'".$prodModif->productosNombre."'"?>/></td></tr>
			<tr><td>Marca:</td><td>
				<input type='text' name='marca' value=<?php echo "'".$prodModif->productosMarca."'"?>/></td></tr>
			<tr><td>Modelo:</td><td>
				<input type='text' name='modelo' value=<?php echo "'".$prodModif->productosModelo."'"?>/></td></tr>
			<tr><td>Descripci&oacute;n:</td><td>
				<input type='text' name='descripcion' value=<?php echo "'".$prodModif->productosDescripcion."'"?>/></td></tr>
			<tr><td>Precio:</td><td><input type='text' name='precio' value=<?php echo "'".$prodModif->productosPrecio."'"?>/></td></tr>
			<tr><td>Tipo:</td><td><input type='text' name='tipo' value=<?php echo "'".$prodModif->productosTipo."'"?>/></td></tr>
			<tr><td>Garantia:</td>
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
			<tr><td>Proveedor:</td><td>
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
			<tr><td><input type='submit'value='Aceptar'/></td></tr>
		</form>
	</table>
</body>
</hmtl>