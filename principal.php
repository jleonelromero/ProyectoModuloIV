<?php
include("Include/cabecera.php");
require_once 'Include/conexion.php';
$cod = $_SESSION["usuario"];
$sqlInstitucion = "SELECT * FROM tbinstitucioneducativa WHERE idInstitucionEducativa = '$cod'";
$fInst = mysqli_query($cn, $sqlInstitucion);
$rInst = mysqli_fetch_assoc($fInst);
$sqlPersona = "SELECT * FROM tbpersonaindividual WHERE idPersona = '$cod'";
$fPers = mysqli_query($cn, $sqlPersona);
$rPers = mysqli_fetch_assoc($fPers);
if ($rInst) {
    $tabla = "InstitucionEducativa";
    
} elseif ($rPers) {
    $tabla = "PersonaIndividual";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <br>
<?php

if (isset($rInst['estado']) && $rInst['estado'] == 0 || isset($rPers['estado']) && $rPers['estado'] == 0) {
    // Código cuando el estado es 0
    echo "llenardatos";
} else {
    echo "hola";
}

?>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
</body>
<?php

include 'Include/footer.php' ?>

</html>