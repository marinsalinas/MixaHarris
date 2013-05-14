<?php
header('content-type text/html charset=utf-8');
require ('../../config.php');
/**
 *La funcion cliente_list()
 *@return un arreglo de objetos de referencia al cliente
 */
function cliente_list()
{
	// TABLA CLIENTE
	$sql= "SELECT *
	FROM  clientes " ;
	 	$cliente= array();
		$result= mysql_query($sql);
		$i= 0;
		while ($row=mysql_fetch_object($result)){
			$cliente[$i]= $row;
			$i++;
		}	
		return $cliente;
}



function producto_list()
{
	// TABLA PRODUCTO
	$sql= "SELECT *
	FROM  productos " ;
	 	$producto= array();
		$result= mysql_query($sql);
		$i= 0;
		while ($row=mysql_fetch_object($result)){
			$producto[$i]= $row;
			$i++;
		}	
		return $producto;
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
	FROM  proveedor " ;
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

//trata de llamarlos así ejem admin_fliter($info)
function cliente_fliter($info)
{
	//tuve que modificar el query lo que hara es no solo buscar por empresa sino hacer una busqueda mas
	//general omitiendo ID, privilegios y password paraque no hay fallas.
	$sql= "SELECT *
	FROM  clientes 
	WHERE clientesNombre LIKE '%$info%' OR clientesApellido LIKE '%$info%' OR clientesDireccion LIKE '%$info%'
		OR clientesCP LIKE '%$info%' OR clientesEmail LIKE '%$info%' OR clientesTelefono LIKE '%$info%'
		OR clientesCelular LIKE '%$info%' OR clientesUsername LIKE '%$info%' OR clientesOcupacion LIKE '%$info%'
		OR clientesNacimiento LIKE '%$info%' OR clientesSexo LIKE '%$info%'";
	 	//echo "<br>".$sql;
	 	$cliente= array();
		$result= mysql_query($sql);
		$i= 0;
		while ($row=mysql_fetch_object($result)){
			$cliente[$i]= $row;
			$i++;
		}	
		return $cliente;
}


/*FUNCION DE FILTRO DE PRODUCTO*/
function producto_filter($info)
{
	
	$sql= "SELECT *
	FROM  productos
	WHERE productosNombre LIKE '%$info%' OR productosMarca LIKE '%$info%' OR productosModelo LIKE '%$info%'
		OR productosDescripcion LIKE '%$info%' OR productosPrecio LIKE '%$info%' OR productosTipo LIKE '%$info%'
		OR productosGarantia LIKE '%$info%' ";
	 	//echo "<br>".$sql;
	 	$producto= array();
		$result= mysql_query($sql);
		$i= 0;
		while ($row=mysql_fetch_object($result)){
			$producto[$i]= $row;
			$i++;
		}	
		return $producto;
}


/*FUNCION DE FILTRO DE PROVEEDORES*/
function proveedor_filter($info)
{
	
	$sql= "SELECT *
	FROM  proveedor
	WHERE proveedorNombre LIKE '%$info%' OR proveedorContacto LIKE '%$info%' OR proveedorTelefono LIKE '%$info%'";
	 	//echo "<br>".$sql;
	 	$proveedor= array();
		$result= mysql_query($sql);
		$i= 0;
		while ($row=mysql_fetch_object($result)){
			$proveedor[$i]= $row;
			$i++;
		}	
		return $proveedor;
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


