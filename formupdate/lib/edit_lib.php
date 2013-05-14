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
		$i= 0;
		while ($row=mysql_fetch_object($result)){
			$cliente= $row;
			$i++;
		}	
		return $cliente;
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
?>