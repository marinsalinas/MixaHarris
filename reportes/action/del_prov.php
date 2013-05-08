<?php
require_once( '../../config.php');

$prov=$_GET['id'];
echo $prov;

$sql = "DELETE FROM proyecto.proveedores WHERE proveedores.id=$prov";

echo $sql;
$result = mysql_query($sql);
if ($result>0)
{
	echo "Se ha eliminado exitosamente el registro";	
}
else 
{
		echo "Contacte a su administrador";
}
?>