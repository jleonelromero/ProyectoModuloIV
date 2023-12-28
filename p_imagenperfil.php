<?php
include("Include/auth.php");
require_once 'Include/conexion.php';
$cod = $_SESSION["usuario"];
$archivo = $_FILES["archivo"]["tmp_name"];
$nombre = $_FILES["archivo"]["name"];
list($n, $e) = explode(".", $nombre);
move_uploaded_file($archivo, "FotosPerfil/" . $cod . ".jpg");
header('location: perfil.php');
