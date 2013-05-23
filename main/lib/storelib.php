<?php
require_once("../../config.php");

function obtenerCatalogoSeccion($tipo){
	$sql = "SELECT * FROM productos WHERE productosTipo = '$tipo'";
	$productos= array();
		$result= mysql_query($sql);
		$i= 0;
		while ($row=mysql_fetch_object($result)){
			$productos[$i]= $row;
			$i++;
		}	
		return $productos;
}

?>