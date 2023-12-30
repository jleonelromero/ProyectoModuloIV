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
if ($rInst && $rInst['estado'] == 0) {
    $tabla = "InstitucionEducativa";
    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'warning',
                title: 'Actualización de datos requerida',
                text: 'Por favor, actualice sus datos.',
            });
        });
    </script>";
} elseif ($rPers && $rPers['estado'] == 0) {
    $tabla = "PersonaIndividual";
    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'warning',
                title: 'Actualización de datos requerida',
                text: 'Por favor, actualice sus datos.',
            });
        });
    </script>";
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
    <link rel="stylesheet" href="css/principal.css">
</head>

<body>
    <br>
    <header>
        <h1>Bienvenidos(as) al Proceso de Validación Electrónica Proyecto Educativo Regional [PER]</h1>
    </header>

    <main>
        <section id="inicio">
            <h2>¡Conéctate con la Educación!</h2>
            <p>El programa registrará tus comentarios y aportes; y un grupo de especialistas los analizará para incorporarlos en la propuesta.</p>
        </section>
    </main>
    <div class="image-slider">
        <img src="img/img1.jpg" alt="Imagen 1" class="slider-item">
        <img src="img/img2.jpg" alt="Imagen 2" class="slider-item">
        <img src="img/img3.jpg" alt="Imagen 3" class="slider-item">
        <img src="img/img4.jpg" alt="Imagen 4" class="slider-item">
        <img src="img/img5.jpg" alt="Imagen 5" class="slider-item">
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            function slide() {
                var sliderWidth = $('.image-slider').width();
                var itemWidth = $('.slider-item').outerWidth(true);
                $('.slider-item:last').after($('.slider-item:first'));
                $('.image-slider').css('left', -itemWidth);

                $('.image-slider').animate({
                    left: '0'
                }, 1000, function() {
                    slide();
                });
            }
            slide();
        });
    </script>
</body>

</html>

<?php
include 'Include/footer.php'
?>