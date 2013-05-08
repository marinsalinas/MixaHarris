<?php
echo "FUNCION ACTIVA";

require_once( '../lib/formularios_lib.php');

$np = $_POST['np'];
$ncon = $_POST['ncon'];
$tel = $_POST['tel'];

echo $np;
echo $ncon;
echo $tel;
//El primer paso es contruir la instruccion en mysql
$sql = "INSERT INTO proyecto.proveedores (id, nombre, contacto, telefono)
 VALUES (NULL, '$np', '$ncon', '$tel');";
 

//echo "<p>".$sql."</p>";
$result= mysql_query($sql);
if ($result >0){
	echo "Se ha ingresado la informacion exitosamente";
}
else {
	echo  "Existe una inconsistencia en informacion";
}
	
?>
