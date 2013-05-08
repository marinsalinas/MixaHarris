<?php
require_once( '../lib/formularios_lib.php');
?>
<table border=1>
<form action='../action/save_catalogo.php' method='post'>
	<tr>
	<td>nombre del producto</td>
	<td><input type='text' id='np' name='np'></td>
	</tr>
	<tr>
	<td>descripcion</td>
	<td><input type='text' id='des' name='des'></td>
	</tr>
	<tr>
	<td>serie</td>
	<td><input type='text' id='serie' name='serie'></td>
	</tr>
	<tr>
	<td>sku</td>
	<td><input type='text' id='sku' name='sku'></td>
	</tr>
	<tr>
		
	<td>proveedor</td>
	<td><select>
		<?php
		$pro = drop_proveedores();	
		foreach ($pro as $key => $prv) {
			echo "<option value='{$prv->id}'>{$prv->nombre}</option>";
		
		}


        ?>
</select>
</td>
	</tr>
		
	<tr>
		<td colspan="2" align=center> <input type='submit' value='aceptar'> </td>
		</tr>
	
</form>	
</table>
	

