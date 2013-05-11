<?php

//echo "rep_productos";

/*funcion lista_cliente el cual recibe como argumento un arreglo de objetos $cliente
 *el cuál nos realiza la tabla de los clientes 
 */
function lista_producto ($producto) {
	//echo "FUNCION/ACTIVA";

echo "<table border=1 alling='center'>";
echo "<tr>";
echo "<td>ID</td>";//1 
echo "<td>Nombre del producto</td>";//2
echo "<td>Marca</td>";//3
echo "<td>Modelo</td>";//4
echo "<td>Descripcion</td>";//5
echo "<td>Precio</td>";//6
echo "<td>Tipo</td>";//7 
echo "<td>Garantia</td>";//8 
echo "</tr>";

foreach ($producto as $key => $prod) {
echo "<tr>";
echo "<td>".$prod->idproductos."</td>"; 
echo "<td>".$prod->productosNombre."</td>";
echo "<td>".$prod->productosMarca."</td>";
echo "<td>".$prod->productosModelo."</td>";
echo "<td>".$prod->productosDescripcion."</td>";
echo "<td>".$prod->productosPrecio."</td>";
echo "<td>".$prod->productosTipo."</td>";
echo "<td>".$prod->productosGarantia."</td>";
echo "</tr>";	
}
echo "</table>";
}

function form_fliterProducto(){

echo "<form action='../action/filtro_producto.php' method='post'>";
echo "Filtrar:";
echo "<input type= 'text' id='info' name='info'>"; 
echo "<input type= 'submit'  value='BUSCAR' >"; 
echo "</form>";
	
}





?>