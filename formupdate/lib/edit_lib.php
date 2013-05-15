<?php
require_once("../../config.php");
/**
 *La funcion selectClienteConID
 *@param $idCliente que es el valor del id para la consulta
 *@return un objeto de referencia el Cliente o Usuario
 */
function selectClienteConID($idCliente)
{
	// TABLA CLIENTE
	$sql= "SELECT *
	FROM  clientes WHERE idclientes = '$idCliente'";
	 	//echo $sql;
	 	$cliente= null;
		$result= mysql_query($sql);
		while ($row=mysql_fetch_object($result)){
			$cliente= $row;
		}	
		return $cliente;
}

function selectAdminConID($idAdmin)
{
	$sql = "SELECT *
			FROM administrador WHERE idadministrador = '$idAdmin'";
		//echo $sql."<br>";
		$admin = null;
		$result = mysql_query($sql);
		while ($row=mysql_fetch_object($result)){
			$admin = $row;
		}
		return $admin;
}

function selectProductoConID($idProducto)
{
	$sql = "SELECT *
			FROM productos WHERE idproductos = '$idProducto'";
		//echo $sql."<br>";
		$producto = null;
		$result = mysql_query($sql);
		while ($row=mysql_fetch_object($result)){
			$producto = $row;
		}
		return $producto;
}

function updateClienteConID($clientesModif, $idCliente)
{
 $sql = "UPDATE clientes SET clientesNombre='$clientesModif[0]', clientesApellido='$clientesModif[1]',
 		 clientesDireccion='$clientesModif[2]', clientesCP = '$clientesModif[3]', clientesEmail = '$clientesModif[4]',
 		 clientesTelefono = '$clientesModif[5]', clientesUsername = '$clientesModif[6]',
 		 clientesCelular = '$clientesModif[7]', clientesOcupacion = '$clientesModif[8]',
 		 clientesSexo = '$clientesModif[9]', clientesNacimiento ='$clientesModif[10]' WHERE idclientes= '$idCliente'";
// echo "<br>".$sql;
$result= mysql_query($sql);
	if ($result >0){
		echo "Se ha ingresado la informacion exitosamente";
	}
	else {
		echo  "Existe una inconsistencia en informacion";
	}		 

}

function UpdateAdminConID($adminModif, $idAdmin)
{
 $sql = "UPDATE administrador SET administradorNombre='$adminModif[0]', administradorApellido='$adminModif[1]',
 		administradorUsername = '$adminModif[2]', administradorEmail = '$adminModif[3]', administradorTelefono = '$adminModif[4]', 
 		administradorSexo = '$adminModif[5]', administradorNacimiento ='$adminModif[6]' WHERE idadministrador= '$idAdmin'";
// echo "<br>".$sql;
$result= mysql_query($sql);
	if ($result >0){
		echo "Se ha ingresado la informacion exitosamente".mysql_info();
	}
	else {
		echo  "Existe una inconsistencia en informacion";
	}
}

function UpdateProductoConID($prodModif, $idProd)
{
 $sql = "UPDATE productos SET productosNombre='$prodModif[0]', productosMarca='$prodModif[1]',
 		productosModelo = '$prodModif[2]',  productosDescripcion= '$prodModif[3]', productosPrecio = '$prodModif[4]', 
 		productosTipo = '$prodModif[5]', productosGarantia ='$prodModif[6]', proveedor_idproveedor = '$prodModif[7]' 
 		WHERE idproductos= '$idProd' ";
//echo "<br>".$sql;
	$result= mysql_query($sql);
		if ($result >0){
			echo "Se ha ingresado la informacion exitosamente ".mysql_info();
		}
		else {
			echo  "Existe una inconsistencia en informacion";
		}
}
?>