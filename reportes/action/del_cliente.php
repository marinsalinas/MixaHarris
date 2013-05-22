<?php
require_once('../../config.php');
//aqui era $info=$_GET['id'];
$info=$_POST['id'];
//echo $info;

$sql = "DELETE FROM mixaharris.clientes WHERE idclientes=$info";
//echo $sql;
$result = mysql_query($sql);
if ($result>0){
	echo "Se ha eliminado exitosamente el registro";	
}
else{
		echo "No se pudo realizar la operación Contacte a su administrador";
}
?>