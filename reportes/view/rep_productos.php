<?php

//echo "rep_productos";

/*funcion lista_cliente el cual recibe como argumento un arreglo de objetos $cliente
 *el cuál nos realiza la tabla de los clientes 
 */
function lista_producto ($producto) {
	//echo "FUNCION/ACTIVA";

echo "<table border=1 alling='center'>";
echo "<tr>";
echo "<th>ID</th>";//1 
echo "<th>Nombre del producto</th>";//2
echo "<th>Marca</th>";//3
echo "<th>Modelo</th>";//4
echo "<th>Descripcion</th>";//5
echo "<th>Precio</th>";//6
echo "<th>Tipo</th>";//7 
echo "<th>Garantia</th>";//8 
echo "<th>Eliminar Registro</th>";
echo "<th>Editar Registro</th>";
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
echo "<td>"."<a href=del_producto.php?id=".$prod->idproductos.">Eliminar</a></td> ";
echo "<td>"."<a href=../../formupdate/view/edit_producto.php?id=".$prod->idproductos.">Editar</a></td>";
echo "</tr>";	
}
echo "</table>";
}

function form_fliterProducto(){

echo "<form action='../action/filtro_producto.php' method='post'>";
echo "</br></br>";
echo "<input type= 'text' id='info' name='info'>"; 
echo "<input type= 'submit'  value='BUSCAR' >"; 
echo "</br></br>";
echo "</form>";
	
}





?>