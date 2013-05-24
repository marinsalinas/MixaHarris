<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel='stylesheet' type='text/css' href = "../../lib/style.css">
		<link href='http://fonts.googleapis.com/css?family=Mouse+Memoirs' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="lib/jquery.js"></script>
		<script type="text/javascript" src="lib/lib.js"></script>
		<title>MixaHarris User</title>
	<title>Bienvenido - Usuario</title>
</head>
<body>


<?php
session_start();
require_once("../../login/valid.php");
require_once("../lib/storelib.php");
$usuario = $_SESSION['usuario'];
if(empty($_GET['seccion'])){
echo "No es posible acceder a esta página en este momento <a href='home.php'>Regresa</a>";
}else{
$seccion = $_GET['seccion'];
echo $seccion."<br>";
$productos = obtenerCatalogoSeccion($seccion);
$i=1;//Contador de elementos en el array
//echo "<pre>";
//print_r($productos);
//echo "</pre>";
$id = null;
	foreach ($usuario as $key => $atrib) {
		$id = $atrib;
		break;
	}

	$priv = null;
	foreach ($usuario as $key => $atrib) {
		$priv = $atrib;
	}
	//es para poner en nombre en la pagina
	$nombre =(($priv == 1) ? $usuario->clientesNombre : $usuario->administradorNombre);
	$href = (($priv == 1) ? "../../main/pagindex/userindex.php" : "../../main/pagindex/adminindex.php");

echo "<!--Comienzo de la seccion catalogo-->";?>
<div id='navegador'>
			<div id='homeLogo'>MixaHarris User</div>
				<div id='navHome'>	
<a class="Bcarrito" href="carrito.php" title="Carrito de compras">conf</a>
					Hola, <?php echo $nombre;?> 
					<form action='../../login/logout.php' id='blogout'>
						<input id='button' type='submit' value='Logout'>	
					</form> 
					<a class="Bca" href=<?php echo "'".$href."'"; ?>  title="Configurar datos personales">conf</a> 
				 </div>
		</div><!--navegador-->
<div id='containerAdmin1'>

<!--

<div id='sidebarAdmin1'
		<section id='sidebar1'>
			<nav>
				<figure class="cuadricula">
					<img id="GElectricas" class="botonSeccion" src="../../images/cuadro1.png" onclick="location.href='../../main/store/store.php?seccion=GElectricas'">
				</figure>

				<figure class="cuadricula">
					<img  id="Bajos" class="botonSeccion" src="../../images/cuadro2.png" onclick="location.href='../../main/store/store.php?seccion=Bajos'">
				</figure>
				</figure>

				<figure class="cuadricula">
					<img id="GAcusticas" class="botonSeccion" src="../../images/cuadro3.png" onclick="location.href='../../main/store/store.php?seccion=GAcusticas'">
				</figure>

				<figure class="cuadricula">
					<img id="Baterias" class="botonSeccion" src="../../images/cuadro4.png" onclick="location.href='../../main/store/store.php?seccion=Baterias'">
				</figure>
				<figure class="cuadricula">
					<img id="Teclados" class="botonSeccion" src="../../images/cuadro5.png" onclick="location.href='../../main/store/store.php?seccion=Teclados'">
				</figure>
				</figure>
				<figure class="cuadricula">
					<img id="Viento" class="botonSeccion" src="../../images/cuadro6.png" onclick="location.href='../../main/store/store.php?seccion=Viento'">
				</figure>
				<figure class="cuadricula">
					<img id="Audio" class="botonSeccion" src="../../images/cuadro7.png" onclick="location.href='../../main/store/store.php?seccion=Audio'">
				</figure>
			</nav>
		</section>
</div>
-->

						<center><h2>MixaHarris</h2></center>
						</br></br>
							<center><p class='hdm'>Productos en venta</p></center>

<?php
echo "<table id='cata'>";
foreach ($productos as $key => $prod) {
	echo "<tr><td>";
	$href="'carrito.php?idproducto={$prod->idproductos}'";
	echo"<seccion class='catalogo'><div>#Item[id]:".$prod->idproductos."</div>";
	echo"<div float='left'>Nombre:".$prod->productosNombre."</div>";
	echo"<div>Marca:".$prod->productosMarca."</div>";
	echo"<div>Modelo:".$prod->productosModelo."</div>";
	echo"<div>Descripci&oacute;n:".$prod->productosDescripcion."</div>";
	echo"<div>Precio:$".$prod->productosPrecio."MNX</div>";
	echo"<div>Garantía Extendida (2a&ntilde;os):".(($prod->productosGarantia == 1)?"SI":"NO")."</div>";
	echo "<div><input type='button' value='Agregar al Carrito'"."onclick=\"location.href=".$href."\">";
	echo"<div><img class='imgStoreCat' src='../../images/productos/".$prod->idproductos.".jpg' value='prod'>";
	echo"</seccion><br>";
	echo "</tr></td>";
	}
}
echo "</table>";
?>
</div>

</body>
</html>