<?php
require_once 'Include/conexion.php';
$idProvincia = $_GET['idProvincia'];
$sql = "SELECT * FROM tbdistrito WHERE idProvincia = '$idProvincia'";
$result = mysqli_query($cn, $sql);
$options = '';
while ($row = mysqli_fetch_assoc($result)) {
    $options .= '<option value="' . $row['idDistrito'] . '">' . $row['nombre'] . '</option>';
}
echo $options;
