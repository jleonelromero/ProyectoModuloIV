<?php
$cod = $_SESSION["usuario"];
$sql = "SELECT idUsuario, nombre FROM (SELECT idInstitucionEducativa AS idUsuario, direcResponsable AS nombre FROM tbinstitucioneducativa WHERE idInstitucionEducativa = '$cod' UNION ALL SELECT idPersona AS idUsuario, nombre FROM tbpersonaindividual WHERE idPersona = '$cod' UNION ALL SELECT idAdmin AS idUsuario, 'Admin' AS nombre FROM tbadministrador WHERE idAdmin = '$cod') AS usuarios";
$f = mysqli_query($cn, $sql);
$r = mysqli_fetch_assoc($f);
$rol = ($r["nombre"]);
?>

<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title></title>
   <link rel="stylesheet" href="css/estilo.css">
   <link rel="stylesheet" href="css/menu.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
   <div class="header-bar">
      <div class="logo">Proceso de Validación Electrónica - Proyecto Educativo Regional [PER]</div>
      <nav class="menu">
         <?php if ($rol === 'Admin') { ?>
            <ul>
               <li><a href='principal.php'><i class="fas fa-bullseye"></i> Objetivos</a></li> <!-- CAMBIAR LA PAG PRINCIPAL DE ADMIN POR LOS OBJETIVOS-->
               <li><a href='consolidado.php'><i class="fas fa-chart-bar"></i> Consolidado</a></li>
               <li class="submenu-trigger">
                  <span><i class="fas fa-file-alt"></i> Reportes</span>
                  <ul class="submenu">
                     <li><a href='reporte.php'><i class="fas fa-users"></i> Reportes - Personas</a></li>
                     <li><a href='reporte.php'><i class="fas fa-building"></i> Reportes - I.E.</a></li>
                  </ul>
               </li>
               <li><a href='busqueda.php'><i class="fas fa-search"></i> Búsquedas</a></li>
               <li class='last'><a href='cerrarsesion.php'><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a></li>
            </ul>
         <?php } else { ?>
            <ul>
               <li><a href='principal.php'><i class="fas fa-home"></i> Principal</a></li>
               <li class="submenu-trigger">
                  <span><i class="fas fa-user"></i> Datos Personales</span>
                  <ul class="submenu">
                     <li><a href='actualizar.php'><i class="fas fa-edit"></i> Actualizar Datos</a></li>
                     <li><a href='cambiarpass.php'><i class="fas fa-lock"></i> Actualizar Contraseña</a></li>
                  </ul>
               </li>
               <li><a href='sugerencias.php'><i class="fas fa-lightbulb"></i> Sugerencias</a></li>
               <li><a href='contactenos.php'><i class="fas fa-envelope"></i> Contáctenos</a></li>
               <li class='last'><a href='cerrarsesion.php'><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a></li>
            </ul>
         <?php } ?>
      </nav>
      <div class="menu-btn">Bienvenido(a) <?php echo $r["nombre"]; ?> &#9776; </div>
   </div>
   <br>
   <script src="js/menu.js"></script>
</body>

</html>