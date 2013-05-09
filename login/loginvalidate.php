<?php
session_start();
require_once("../config.php");

$user=$_POST['user'];
$pass=$_POST['pass'];

function valid($usr, $pas){
	$sql= "SELECT idclientes, clientesNombre, clientesUsername, clientesPassword 
	FROM clientes WHERE clientesUsername ='$usr' AND clientesPassword = '$pas' LIMIT 1";
	//echo "<br>".$sql."</br>";
	$result=mysql_query($sql);
	while($row=mysql_fetch_object($result)) {
		$usuario = $row;
	}
	return $usuario;
}

if(empty($user)||empty($pass)){
	echo"No se coloco usuario o contraseña<br>";
	die();
}

//echo $pass."<br>";
$pass=md5($pass);
//echo $pass;

$usuario=valid($user, $pass);
//echo "<pre>";
//print_r($usuario);
//echo "</pre>";


if(!empty($usuario)){
$_SESSION['usuario'] = $usuario;
header('Location: ../main/Index.php');	
}else{echo htmlentities("Usuario o contraseña no válidos");}
?>