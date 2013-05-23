<?php
//esto es para validad session carrito etc etc etc
session_start();
//falta el require de que este en una session y sea usuario
require_once("../lib/storelib.php");

if(empty($_GET['idproducto'])){
 	$carrito=selectCarrito($_SESSION['usuario']->idclientes);	
}else{
	$idproductos = $_GET['idproducto'];
	insertCarrito($idproductos, $_SESSION['usuario']->idclientes);
 	$carrito=selectCarrito($_SESSION['usuario']->idclientes);	
}
?>


<?php

/*echo "<pre>";
print_r($carrito);
echo "</pre>";*/


echo "<table alling='center'>";
echo "<tr>";
echo "<th>ID</th>";//1 
echo "<th>Nombre</th>";//2
echo "<th>Marca</th>";//3
echo "<th>Modelo</th>";//4
echo "<th>Descripcion</th>";//5
echo "<th>Precio</th>";//6
echo "<th>Garantia</th>";//8 
echo "<th>Borrar Carrito</th>";
echo "</tr>";
$i=0;
foreach ($carrito as $key => $prod) {
	echo "<tr>";
	echo "<td>".$prod->idproductos."</td>"; 
	echo "<td>".$prod->productosNombre."</td>";
	echo "<td>".$prod->productosMarca."</td>";
	echo "<td>".$prod->productosModelo."</td>";
	echo "<td>".$prod->productosDescripcion."</td>";
	echo "<td>".$prod->productosPrecio."</td>";
	if($prod->productosGarantia == 0)
		echo "<td>NO</td>";
	else
		echo"<td>SI</td>";
	echo "<td><center>"."<a href=del_carrito.php?idcarrito=".$prod->idcarrito.">Eliminar</a></center></td> ";
	echo "</tr>";
	$i++;
}

?>


<tr><td colspan='8'><center><form name='Comprar' action="carrito_compra.php" method='post' accept-charset='utf-8'>
	<input type='hidden' name='contador' value=<?php echo"'".$i."'"?> />
	<input type='submit' value='Comprar'/>
</form></center></td></tr></table>


