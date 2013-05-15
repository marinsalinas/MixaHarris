<?php
require_once("../lib/edit_lib.php");
echo "ya jala el GET y es: ";
echo $_GET['id']."<br>";
$usr = selectClienteConID($_GET['id']);
echo"<pre>";
print_r($usr);
echo "</pre>";
?>