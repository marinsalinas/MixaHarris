<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel='stylesheet' type='text/css' href = "../../lib/style.css">
		<link href='http://fonts.googleapis.com/css?family=Mouse+Memoirs' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="../../lib/jquery.js"></script>
		<script type="text/javascript" src="../../lib/lib.js"></script>
		<title>MixaHarris User</title>
	<title>Bienvenido - Usuario</title>
</head>
<body>


<?php
//esto es para validad session carrito etc etc etc
session_start();
//falta el require de que este en una session y sea usuario
require_once("../lib/storelib.php");
require_once("../../login/valid.php");
$usuario = $_SESSION['usuario'];

if(empty($_GET['idproducto'])){
 	$carrito=selectCarrito($_SESSION['usuario']->idclientes);	
}else{
	$idproductos = $_GET['idproducto'];
	insertCarrito($idproductos, $_SESSION['usuario']->idclientes);
 	$carrito=selectCarrito($_SESSION['usuario']->idclientes);	
}
?>

	<div id='navegador'>
			<div id='homeLogo'>MixaHarris User</div>
				<div id='navHome'>	
<a class="Bcarrito" href="carrito.php" title="Carrito de compras">conf</a>
					Hola, <?php echo $usuario->clientesNombre;?> 
					<form action='../../login/logout.php' id='blogout'>
						<input id='button' type='submit' value='Logout'>	
					</form> 
					<a class="Bca" href="../pagindex/userindex.php" title="Configurar datos personales">conf</a> 
				 </div>
		</div><!--navegador-->


<center><div id='menuModClientes'>
	<center><h2>MixaHarris</h2></center>
						</br>
							<p class='hdm'>Carrito de Compras</p>
<?php

/*echo "<pre>";
print_r($carrito);
echo "</pre>";*/


echo "<table id='tablaCliente'>";
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
</br></br></br>
<a id='aFondo' href='home.php'>Regresar</a>
</br></br>
</div></center>
</body>
</html>


