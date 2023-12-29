<?php

include 'include/conexion.php';


$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$corre=$_POST['correo'];
$motivo=$_POST['motivo'];
$mensaje=$_POST['mensaje'];


$sinespacio=trim($mensaje);
$sql="INSERT INTO   tbconctacto(nombre,apellido,correo,telefono,txt,motivo)VALUES ('$nombre','$apellidos','$corre','$telefono','$sinespacio','$motivo')";
mysqli_query($cn,$sql);
mysqli_close($cn);

?>