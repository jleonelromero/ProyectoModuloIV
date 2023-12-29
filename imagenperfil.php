<?php
include("Include/auth.php");
require_once 'Include/conexion.php';
$cod = $_SESSION["usuario"];
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="css/foto.css">
</head>

<body>
	<br>
	<form action="p_imagenperfil.php" method="post" enctype="multipart/form-data">
		<center>
			Escoger archivo (Solo .jpg)
			<input type="file" name="archivo">
			<input type="submit" value="Cargar Foto">
		</center>
	</form>
	<br>
	<br>
	<br>
	<?php
	if (isset($_GET["msj"])) {
		$mensaje = $_GET["msj"];
		echo "<center><h1 id='titulo'>$mensaje</h1></center>";
	}
	?>
	<a href="perfil.php">Regresar atras</a>
</body>

</html>