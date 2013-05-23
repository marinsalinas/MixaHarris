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


function insertCarrito($idproductos, $idcliente){
	$sql = "INSERT INTO carrito (idcarrito, idproductos, idcliente)
	 VALUES (null, '{$idproductos}', '{$idcliente}');";
	//echo "<p>".$sql."</p>";
	$result= mysql_query($sql);
	if ($result >0){
		//echo "<center><h2>Se ha ingresado la informacion exitosamente</center></h2>";
		echo '<script>alert("Se ha ingresado exitosamente");</script>';
		echo "<script>location.href='carrito.php'</script>";
	}
	else {
		//echo  "<center><h2>Existe una inconsistencia en informacion</center></h2>";
		echo '<script>alert("Hubo una inconsistencia no se pudo agregar");</script>';
		echo "<script>location.href='carrito.php'</script>";
	}
}

function selectCarrito($idcliente){
	$sql="SELECT carrito.idcarrito, productos.idproductos, productos.productosNombre, productos.productosMarca,
			productos.productosModelo, productos.productosDescripcion, 
			productos.productosPrecio, productos.productosGarantia FROM productos
			LEFT JOIN carrito ON productos.idproductos = carrito.idproductos 
			WHERE carrito.idcliente = {$idcliente} AND carrito.carritoDefault = 1;";
	//echo $sql."<br>";
	$carrito= array();
		$result= mysql_query($sql);
		$i= 0;
		while ($row=mysql_fetch_object($result)){
			$carrito[$i]= $row;
			$i++;
		}	
		return $carrito;
}

function deleteCarrito($idcarrito){
$sql = "DELETE FROM mixaharris.carrito WHERE idcarrito={$idcarrito}";
//echo $sql;
$result = mysql_query($sql);
if ($result>0){
	echo '<script>alert("Se ha ingresado exitosamente");</script>';	
	echo "<script>location.href='home.php';</script>";
}
else{
		echo '<script>alert("Hubo una inconsistencia no se pudo agregar");</script>';
		echo "<script>location.href='home.php';</script>";
}
}




function compra($idcli){
 $folio = $idcli.rand();
 //echo $folio;
 $carrito = selectCarrito($idcli);
 $sql = "INSERT INTO mixaharris.compras (idproducto, idcliente, idcarrito, folio) VALUES ";
 for($i = 0; $i < count($carrito); $i++){
 	if($i < count($carrito) -1)
 		$sql = $sql."('{$carrito[$i]->idproductos}', '{$idcli}', '{$carrito[$i]->idcarrito}', '{$folio}'),";
 	else
 		$sql = $sql."('{$carrito[$i]->idproductos}', '{$idcli}', '{$carrito[$i]->idcarrito}', '{$folio}');";
 }

 $result = mysql_query($sql);
 if ($result>0){
	echo '<script>alert("Se ha ingresado exitosamente");</script>';	
	$sql2 = "TRUNCATE TABLE carrito;";
	mysql_query($sql2);
	echo "<script>location.href='home.php';</script>";
}
else{
		echo '<script>alert("Hubo una inconsistencia no se pudo agregar");</script>';
		echo "<script>location.href='home.php';</script>";
}
}
?>