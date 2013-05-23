<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name='description' content=''/>
	<meta http-equiv='X-UA-Compatible' content='IE=edge, chrome=1'/>
	<link rel='stylesheet' type='text/css' href = "../lib/styleUser.css">
	<link href='http://fonts.googleapis.com/css?family=Mouse+Memoirs' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="../../lib/jquery.js"></script>
	<script type="text/javascript" src="../../lib/lib.js"></script>
	<title>Usuer o Contraseña Incorrecta</title>
</head>
<body>
	<div id='navegador'>
			<div id='homeLogo' onclick="location.href='../index.html'">MixaHarris Home</div>
			<div id='login'>	
	
			</div>
		</div>
	

<center><div id='menuAltaClientes'>
						</br></br>
							<p class='hdm'>Login ERROR</p></br></br>
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
			header('Location: ../main/store/home.php');	
		}else{echo htmlentities("Usuario o contraseña no válidos - User");}
}
if ($priv == 0) {
	$admin=validAdmin($user, $pass);
		if(!empty($admin)){
			$_SESSION['usuario'] = $admin;
			header('Location: ../main/pagindex/adminindex.php');	
		}else{echo htmlentities("Usuario o contraseña no válidos - Admin");}
}

//echo "<pre>";
//print_r($usuario);
//echo "</pre>";
?>
</br></br>
<table id="tablaAltaCliente">
		<form name='login' action='loginvalidate.php' method='post'/>
		<tr><td>Tipo de Usuario:</td><td><select name='tipoLogin'><option value='1'>Cliente</option><option value='0'>Administrador</option></select></td></tr>
		<tr><td>Usuario:</td><td><input type='text' name='user'></td></tr>
		<tr><td>Contraseña:</td><td><input type='password' name='pass'></td></tr>
		<tr><td colspan='2'><center><input id='button' type='submit' value='Entrar' /></center></td></tr>
		</form>
	</table>	

</br></br>

</div></center><!--Div de menu-->

</body>
</html>