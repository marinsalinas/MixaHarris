<?php
//echo "algo";
require_once( '../../config.php');

//echo "Funciona";
function drop_proveedores(){	
$sql= "SELECT idproveedor, proveedorNombre
	FROM  proveedor " ;
	 	$proveedores= array();
		$result= mysql_query($sql);
		$i= 0;
		while ($row=mysql_fetch_object($result)){
			$proveedores[$i]= $row;
			$i++;
		}	
		return $proveedores;
}



?>