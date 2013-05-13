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
?>