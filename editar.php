<?php
require_once("conexion.php");
$id=$_POST['id_persona'];

$sql="select * from persona where id_persona=$id";

$rs = $cnx->query($sql);
$registro = $rs->fetchObject();
echo json_encode($registro);
?>