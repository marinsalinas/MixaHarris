<?php
session_start();
require_once("../lib/storelib.php");
$idcarrito = $_GET['idcarrito'];
deleteCarrito($idcarrito);
?>