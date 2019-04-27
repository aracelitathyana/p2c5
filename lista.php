<?php
require_once("conexion.php"); // cada vez que se abre esta pestaña va a requerir de la conexion a la bd
$sql="select * from persona"; //guarda los datos en la variable "sql" 
$result=$cnx->query($sql); //ejecuta la sentencia sql 

while ($reg=$result->fetchObject()) {
    echo "<tr>
                <td>$reg->id_persona</td>
                <td>$reg->nombres</td>
                <td>$reg->apellidos</td>
                <td>$reg->correo</td>
                <td>
                    <button class='btn btn-danger' onclick='eliminar($reg->id_persona)'>Eliminar</button>
                    <button class='btn btn-primary' onclick='editar($reg->id_persona)'>Editar</button>
                </td>
                 
                
        </tr>";
}
?>