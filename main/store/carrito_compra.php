<?php
session_start();
require_once("../lib/storelib.php");
compra($_SESSION['usuario']->idclientes);
?>