<?php
require_once('../../config.php');

$info=$_GET['id'];
//echo $info;

$sql = "DELETE FROM mixaharris.clientes WHERE idclientes=$info";
//echo $sql;
$result = mysql_query($sql);
if ($result>0){
	echo "Se ha eliminado exitosamente el registro";	
}
else{
		echo "Contacte a su administrador";
}
?>