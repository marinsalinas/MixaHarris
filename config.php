<?php
print "config.php";

/* Script el cual gestiona la conexión con la base de datos de MySQL*/

//Conexión de la Base de Datos
$cfg["db_host"]="localhost";    //dirección del host de la Base de datos
$cfg["db_name"]="MixaHarris";    //nombre de la base de datos
$cfg["db_user"]="root";   //nombre del usuario del administrador de la base de datos
$cfg["db_pass"]="salinass27_";    //password la contraseña cambia segun el host de la base de datos

function getdb(){
	global $cfg;
	$db=mysql_pconnect($cfg["db_host"], $cfg["db_user"],$cfg["db_pass"]);
	$db_sel = mysql_select_db($cfg["db_name"], $db);	
	print_r($db_sel);
	
	if(empty($db_sel))
	{
		echo "Error de conexion";
	}
}
//llama a la funcion getdb() para tener la conexión activa
getdb();
?>