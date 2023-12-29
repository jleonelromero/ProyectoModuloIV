<?php
include("Include/auth.php");
include("Include/conexion.php");
$cod = $_SESSION["usuario"];
$descripcion = $_POST["txtsugerencia"];
$tipo = $_POST['tipo'];
$idTipo = $_POST['idtipo'];
$sql="INSERT INTO tbsugerencia (tipo, idTipo, descripcion, idUsuario) VALUES ('$tipo','$idTipo','$descripcion','$cod')";
mysqli_query($cn, $sql);
header('location: matriz.php');
?>