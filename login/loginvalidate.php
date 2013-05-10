<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Usuer o Contraseña Incorrecta</title>
</head>
<body>
<?php
session_start();
require_once("../config.php");

$user=$_POST['user'];
$pass=$_POST['pass'];
$priv=$_POST['tipoLogin'];

function validUser($usr, $pas){
	$sql= "SELECT idclientes, clientesNombre, clientesUsername, clientesPassword, clientesPrivilegio 
	FROM clientes WHERE clientesUsername ='$usr' AND clientesPassword = '$pas' LIMIT 1";
	//echo "<br>".$sql."</br>";
	$result=mysql_query($sql);
	$usuario = null;// lo modifique
	while($row=mysql_fetch_object($result)){
		$usuario = $row;
	}
	return $usuario;
}

function validAdmin($usr, $pas){
	$sql= "SELECT idadministrador, administradorNombre, administradorUsername, administradorPassword, administradorPrivilegios  
	FROM administrador WHERE administradorUsername ='$usr' AND administradorPassword = '$pas' LIMIT 1";
	//echo "<br>".$sql."</br>";
	$result=mysql_query($sql);
	$usuario = null;//lo modifique
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

if($priv == 1){
	$usuario=validUser($user, $pass);
		if(!empty($usuario)){
			$_SESSION['usuario'] = $usuario;
			header('Location: ../main/Index.php');	
		}else{echo htmlentities("Usuario o contraseña no válidos - User");}
}
if ($priv == 0) {
	$admin=validAdmin($user, $pass);
		if(!empty($admin)){
			$_SESSION['usuario'] = $admin;
			header('Location: ../main/AdminIndex.php');	
		}else{echo htmlentities("Usuario o contraseña no válidos - Admin");}
}

//echo "<pre>";
//print_r($usuario);
//echo "</pre>";
?>
</body>
</html>