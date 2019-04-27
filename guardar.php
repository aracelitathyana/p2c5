<?php
require_once("conexion.php");
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$sql="insert into persona (nombres,apellidos,correo) values ('$nombres','$apellidos','$correo')";
$e=0;
$cnx->query($sql) or $e=1;
echo $e;
?>