<?php
$usuario = $_POST["user"];
$contrasena = $_POST["pass"];

$ckuser = "admin";
$ckpass = "1234";

if ($usuario==$ckuser && $contrasena==$ckpass) {
header("location:https://www.potrerodigital.org/");
} else {
header("location:error.html");
}
 ?>
