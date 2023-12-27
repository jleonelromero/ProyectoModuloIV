<?php

include("Include/conexion.php");
$ide=$_POST["id_"];
$nombre=$_POST["nombre_"];
$sql="UPDATE tbinstitucioneducativa SET 
nombre='$nombre' WHERE idInstitucionEducativa= $ide ";
#actualizar datos de una tabla
$re=mysqli_query($cn, $sql);
mysqli_close($cn);

?>