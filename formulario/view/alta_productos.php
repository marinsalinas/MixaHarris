<!DOCTYPE html>
<html lang='es'>
<html>
<head>
	<meta charset='utf-8'/>
	<meta name='description' content=''/>
	<meta http-equiv='X-UA-Compatible' content='IE=edge, chrome=1'/>
<title>MixaHarris - Formulario Productos</title>
<body>
	<h1>Formularios Productos</h1>
	<table>
		<form name='altasProductos' action="../action/save_productos.php" method='post' accept-charset='utf-8'>
			<tr><td>Nombre de Producto:</td><td><input type='text' name='nombre'/></td></tr>
			<tr><td>Marca:</td><td><input type='text' name='marca'/></td></tr>
			<tr><td>Modelo:</td><td><input type='text' name='modelo'/></td></tr>
			<tr><td>Descripcion:</td><td><input type='text' name='descripcion'/></td></tr>
			<tr><td>Precio:</td><td><input type='text' name='precio'/></td></tr>
			<tr><td>Tipo:</td><td><input type='text' name='tipo'/></td></tr>
			<tr><td>Garantia:</td>
				<td><input type='radio' name='garantia' value='1' />Si
				<input type='radio' name='garantia' value='0' />No</td>
			</tr>
			<tr><td>Proveedor:</td><td>
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
			<tr><td><input type='submit'value='Aceptar'/></td></tr>
		</form>
	</table>
</body>
</hmtl>