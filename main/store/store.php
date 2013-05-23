<?php
require_once("../lib/storelib.php");
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
echo "<!--Comienzo de la seccion catalogo-->";
foreach ($productos as $key => $prod) {
	$href="'carrito.php?idproducto={$prod->idproductos}'";
	echo"<seccion class='catalogo'><div>#Item[id]:".$prod->idproductos."</div>";
	echo"<div>Nombre:".$prod->productosNombre."</div>";
	echo"<div>Marca:".$prod->productosMarca."</div>";
	echo"<div>Modelo:".$prod->productosModelo."</div>";
	echo"<div>Descripci&oacute;n:".$prod->productosDescripcion."</div>";
	echo"<div>Precio:$".$prod->productosPrecio."MNX</div>";
	echo"<div>Garantía Extendida (2a&ntilde;os):".(($prod->productosGarantia == 1)?"SI":"NO")."</div>";
	echo "<div><input type='button' value='Agregar al Carrito'"."onclick=\"location.href=".$href."\">";
	echo"<div><img class='imgStoreCat' src='../../images/productos/".$prod->idproductos.".jpg' value='prod'>";
	echo"</sec=tion><br>";
	}
}
?>