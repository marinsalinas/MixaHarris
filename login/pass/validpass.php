<?php
require_once("../../config.php");

$passActual = $_POST['actual'];
$passNuevo = $_POST['nuevo'];
$id = $_POST['id'];

$passActual =md5($passActual);
//Esta funcion me retorna el password del cliente/
function selectpasswordCliente($idCliente)
{
	// TABLA CLIENTE
	$sql= "SELECT clientesPassword
	FROM  clientes WHERE idclientes = '$idCliente'";
	 	//echo $sql;
	 	$cliente= null;
		$result= mysql_query($sql);
		while ($row=mysql_fetch_object($result)){
			$cliente= $row;
		}	
		return $cliente->clientesPassword;
}

function updatePassWord($passNuevo, $idCliente)
{
 $sql = "UPDATE clientes SET clientesPassword = '$passNuevo' WHERE idclientes= '$idCliente'";
// echo "<br>".$sql;
$result= mysql_query($sql);
	if ($result >0){
		echo "Se ha ingresado la informacion exitosamente";
	}
	else {
		echo  "Existe una inconsistencia en informacion";
	}		 

}

if($passActual == selectpasswordCliente($id)){
$passNuevo = md5($passNuevo);
updatePassWord($passNuevo, $id);
}else{
	echo "La contraseña actual no coincide con la del formulario";
}
?>