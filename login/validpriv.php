<?php

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
		header('Location: ../login/blockpage.php');
		echo "HOLAAA<br>";
	}
}
function validUser(){
	$user=$_SESSION['usuario'];
	//echo "<pre>";
	//print_r($user);
	//echo "</pre>";
	foreach ($user as $key => $atrib) {
		$privilegio = $atrib;
	}
	echo "<br>";
	print_r($privilegio);
	if($privilegio == 0){
		header('Location: ../login/blockpage.php');
	}
}
?>