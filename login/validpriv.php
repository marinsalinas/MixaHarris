	<?php
//Valida que sea administrador si no lo es manda a la página blockpage.php
function validAdmin(){
	$user=$_SESSION['usuario'];
	//echo "<pre>";
	//print_r($user);
	//echo "</pre>";
	foreach ($user as $key => $atrib) {
		$privilegio = $atrib;
	}
	//echo "<br>";
	//print_r($privilegio);
	if($privilegio == 1){
		header('Location: ../../login/blockpage.php');
		echo "HOLAAA<br>";
	}
}
//funcion que valida que sea usuario si no lo se lo manda a blockpage.php
function validUser(){
	$user=$_SESSION['usuario'];
	//echo "<pre>";
	//print_r($user);
	//echo "</pre>";
	foreach ($user as $key => $atrib) {
		$privilegio = $atrib;
	}
	//echo "<br>";
	//print_r($privilegio);
	if($privilegio == 0){
		header('Location: ../../login/blockpage.php');
	}
}
?>