<?php
include("Include/auth.php");
include("Include/conexion.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cod = $_SESSION["usuario"];
    $correo = $_POST["txtcorreo"];
    $pass_antigua = $_POST["pass_antigua"];
    $pass_nueva = $_POST["pass_nueva"];
    $pass_confirmar = $_POST["pass_confirmar"];
    $sql = "SELECT contraseña FROM tbinstitucioneducativa WHERE idInstitucionEducativa = '$cod' UNION ALL SELECT contraseña FROM tbpersonaindividual WHERE idPersona = '$cod'";
    $result = mysqli_query($cn, $sql);
    $row = mysqli_fetch_assoc($result);
    $pass_hash = $row['contraseña'];
    $pass_nueva_hash = password_hash($pass_nueva, PASSWORD_DEFAULT);
    $sqlInst = "UPDATE tbinstitucioneducativa SET contraseña = '$pass_nueva_hash' WHERE idInstitucionEducativa = '$cod'";
    $fInst = mysqli_query($cn, $sqlInst);
    $sqlPer = "UPDATE tbpersonaindividual SET contraseña = '$pass_nueva_hash' WHERE idPersona = '$cod'";
    $fPer = mysqli_query($cn, $sqlPer);
} else {
    header("Location: perfil.php");
    exit();
}
