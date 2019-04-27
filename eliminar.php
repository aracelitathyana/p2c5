<?php
require_once("conexion.php");
$id=$_POST['id_persona'];

$sql="delete from persona where id_persona=$id";
$e=0;
$cnx->query($sql) or $e=1;
echo $e;
?>