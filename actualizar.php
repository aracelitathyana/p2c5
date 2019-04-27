<?php
require_once("conexion.php");
$id=$_POST['id_persona'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$sql="update persona set nombres='$nombres',apellidos='$apellidos',correo='$correo' where id_persona=$id";
$e=0;
$cnx->query($sql) or $e=1;
echo $e;
?>