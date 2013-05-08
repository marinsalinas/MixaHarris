<?php
echo "1";
require ('../../config.php');   
echo "2";

function cliente_list()
{
	// TABLA CLIENTE
	$sql= "SELECT *
	FROM  cliente " ;
	 	$cliente= array();
		$result= mysql_query($sql);
		$i= 0;
		while ($row=mysql_fetch_object($result)){
			$cliente[$i]= $row;
			$i++;
		}	
		return $cliente;
}

function catalogo_list()
{
	//TABLA CATALOGO
	$sql= "SELECT *
	FROM  catalogo" ;
	 	$catalogo= array();
		$result_cat= mysql_query($sql);
		$i= 0;
		while ($row=mysql_fetch_object($result_cat)){
			$catalogo[$i]= $row;
			$i++;
		}	
		return $catalogo;
}


function inventario_list()
{
	//TABLA INVENTARIO
	$sql= "SELECT *
	FROM  inventario" ;
	 	$inventario= array();
		$result_inv= mysql_query($sql);
		$i= 0;
		while ($row=mysql_fetch_object($result_inv)){
			$inventario[$i]= $row;
			$i++;
		}	
		return $inventario;
}


function proveedores_list()
{
	//TABLA PROVEEDORES
	$sql= "SELECT *
	FROM  proveedores" ;
	 	$proveedor= array();
		$result_prov= mysql_query($sql);
		$i= 0;
		while ($row=mysql_fetch_object($result_prov)){
			$proveedor[$i]= $row;
			$i++;
		}	
		return $proveedor;
}

function usuario_list()
{
	//TABLA USUARIO
	$sql= "SELECT *
	FROM  usuario" ;
	 	$usuario= array();
		$result_usuario= mysql_query($sql);
		$i= 0;
		while ($row=mysql_fetch_object($result_usuario)){
			$usuario[$i]= $row;
			$i++;
		}	
		return $usuario;
}


function cliente_searchbyempresa($empresa)
{
	// TABLA CLIENTE
	$sql= "SELECT *
	FROM  cliente 
	WHERE empresa='$empresa' " ;
	 	$cliente= array();
		$result= mysql_query($sql);
		$i= 0;
		while ($row=mysql_fetch_object($result)){
			$cliente[$i]= $row;
			$i++;
		}	
		return $cliente;
}

function proveedor_searchbyproveedor($proveedor)
{
	// TABLA CLIENTE
	$sql= "SELECT *
	FROM  proveedores 
	WHERE nombre='$proveedor' " ;
	echo "<p>".$sql."</p>";
	 	$proveedor= array();
		$result= mysql_query($sql);
		$i= 0;
		while ($row=mysql_fetch_object($result)){
			$proveedor[$i]= $row;
			$i++;
		}	
		return $proveedor;
}

function catalogo_searchbycatalogo($nombre)
{
	// TABLA CATALOGO
	$sql= "SELECT *
	FROM  catalogo 
	WHERE nombre='$nombre' " ;
	echo "<p>".$sql."</p>";
	 	$catalogo= array();
		$result= mysql_query($sql);
		$i= 0;
		while ($row=mysql_fetch_object($result)){
			$catalogo[$i]= $row;
			$i++;
		}	
		return $catalogo;
}

function inventario_searchbyinventario($movimiento)
{
	// TABLA INVENTARIO
	$sql= "SELECT *
	FROM  inventario 
	WHERE movimiento='$movimiento' " ;
	echo "<p>".$sql."</p>";
	 	$inventario= array();
		$result= mysql_query($sql);
		$i= 0;
		while ($row=mysql_fetch_object($result)){
			$inventario[$i]= $row;
			$i++;
		}	
		return $inventario;
}

function usuario_searchbyidusuario($id)
{
	// TABLA INVENTARIO
	$sql= "SELECT *
	FROM  usuario 
	WHERE id='$id' " ;
	echo "<p>".$sql."</p>";
	 	$usuario= array();
		$result= mysql_query($sql);
		$i= 0;
		while ($row=mysql_fetch_object($result)){
			$usuario[$i]= $row;
			$i++;
		}	
		return $usuario;
}

?>


