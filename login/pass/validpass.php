<?php
require_once("../../config.php");
$passActual = $_POST['actual'];
$passNuevo = $_POST['nuevo'];
$id = $_POST['id'];
$privilegio = $_POST['privilegio'];
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

function selectpasswordAdmin($idAdmin)
{
	// TABLA CLIENTE
	$sql= "SELECT administradorPassword
	FROM administrador WHERE idadministrador = '$idAdmin'";
	 	//echo $sql;
	 	$cliente= null;
		$result= mysql_query($sql);
		while ($row=mysql_fetch_object($result)){
			$administrador= $row;
		}	
		return $administrador->administradorPassword;
}

function updatePassWordUser($passNuevo, $idCliente)
{
 $sql = "UPDATE clientes SET clientesPassword = '$passNuevo' WHERE idclientes= '$idCliente'";
// echo "<br>".$sql;
$result= mysql_query($sql);
	if ($result >0){
		echo "Se ha ingresado la informacion exitosamente";
				echo '<script>alert("Se ha ingresado la información exitosamente");</script>';
		echo "<script>location.href='../../main/pagindex/userindex.php';</script>";
	}
	else {
		echo '<script>alert("Existe una inconsistencia en la información");</script>';
		echo "<script>location.href='cambiar_pass.php';</script>";
	}		 

}

function updatePassWordAdmin($passNuevo, $idAdmin)
{
 $sql = "UPDATE administrador SET administradorPassword = '$passNuevo' WHERE idadministrador= '$idAdmin'";
// echo "<br>".$sql;
$result= mysql_query($sql);
	if ($result >0){
		//echo "Se ha ingresado la informacion exitosamente";
		echo '<script>alert("Se ha ingresado la información exitosamente");</script>';
		echo "<script>location.href='../../main/pagindex/adminindex.php';</script>";
	}
	else {
		//echo  "Existe una inconsistencia en informacion";
		echo '<script>alert("Existe una inconsistencia en la información");</script>';
		echo "<script>location.href='cambiar_pass.php';</script>";
	}		 

}

if($privilegio == 1){
	
	if($passActual == selectpasswordCliente($id)){
	$passNuevo = md5($passNuevo);
	updatePassWordUser($passNuevo, $id);
	}else{
		//echo "la contra no coincide";
		echo '<script>alert("La contraseña actual no coincide con la del formulario");</script>';
		echo "<script>location.href='cambiar_pass.php';</script>";
	}
}elseif($privilegio == 0) {
	
	if($passActual == selectpasswordAdmin($id)){
	$passNuevo = md5($passNuevo);
	updatePassWordAdmin($passNuevo, $id);
	}else{
		//echo "la contra no coincide";
		echo '<script>alert("La contraseña actual no coincide con la del formulario");</script>';
		echo "<script>location.href='cambiar_pass.php';</script>";
	}

}else{
		echo '<script>alert("No se pudo encontrar el tipo de usuario");</script>';
		echo "<script>location.href='cambiar_pass.php';</script>";
}	

?>