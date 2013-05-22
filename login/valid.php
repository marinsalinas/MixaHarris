<?php
if (empty($_SESSION['usuario'])) {
	header('Location: ../../index.html');
	die();
}
?>