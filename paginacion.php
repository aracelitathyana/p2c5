<?php
$pag=$_POST['pagina'];

require_once("conexion.php");
$sql = "select count(*) as cantidad from persona";
$rs = $cnx->query($sql);
$reg=$rs->fetchObject();
$numreg=$reg->cantidad;

$cantpag=ceil($numreg/10);

echo "<tr>"
for ($i=1; $i<=$cantpag ; $i++) { 
    # code...
}
echo "</tr>"

?>