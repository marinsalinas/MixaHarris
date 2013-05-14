<?php
if (empty($_SESSION['usuario'])) {
	header('Location: ../../login/login.php');
	die();
}
?>