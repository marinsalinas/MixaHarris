<?php
require_once("../lib/storelib.php");
$seccion = $_GET['seccion'];
echo $seccion."<br>";
$productos = obtenerCatalogoSeccion($seccion);
//echo "<pre>";
//print_r($productos);
//echo "</pre>";
?>
<!--Comienzo de la seccion catalogo-->
<?php
foreach ($productos as $key => $prod) {
	echo"<seccion class='catalogo'><div>#Item[id]:".$prod->idproductos."</div>";
	echo"<div>Nombre:".$prod->productosNombre."</div>";
	echo"<div>Marca:".$prod->productosMarca."</div>";
	echo"<div>Modelo:".$prod->productosModelo."</div>";
	echo"<div>Descripci&oacute;n:".$prod->productosDescripcion."</div>";
	echo"<div>Precio:$".$prod->productosPrecio."MNX</div>";
	echo"<div>Garantía Extendida (2a&ntilde;os):".(($prod->productosGarantia == 1)?"SI":"NO")."</div>";
	echo"<div><img class='imgStoreCat' src='../../images/productos/".$prod->idproductos.".jpg' value='prod'>";
	echo"</section><br>";

}
?>