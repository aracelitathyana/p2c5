<?php
$driver = "mysql";
$base = "bd_p2c5";
$host = "localhost";
$usuario = 'root';
$contraseña = '';


$dsn = "$driver:dbname=$base;host=$host";

try {
    $cnx = new PDO($dsn, $usuario, $contraseña);
    //echo 'hola ara' ;
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}

?>