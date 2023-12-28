<?php
include 'Include/conexion.php';
include'Include/cabecera.php';
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

<link rel="stylesheet" href="css/perfil.css">
<?php if ($tabla === "InstitucionEducativa") { ?>

    <table>
        <tr>
            <td rowspan="11"> <a href="">
                <?php
                    $fotoPath = "FotosPerfil/" . $rInst["idInstitucionEducativa"] . ".jpg";
                    if (file_exists($fotoPath)) {
                        echo '<img src="' . $fotoPath . '" width="150" height="180">';
                    } else {
                        echo '<img src="FotosPerfil/foto-porDefecto.png" width="150" height="180">';
                    }
                    ?>
            </a></td>
        </tr>
        <tr>
            <td>Codigo de la I.E</td>
            <td>
                <?php echo $rInst["codInstitucion"]; ?> </td>
        </tr>
        <tr>
            <td>Nombre de la Institución Educativa</td>
        <td><?php echo $rInst["nombre"]; ?></td>
    </tr>
        <td>Email:</td>
        <td><?php echo $rInst["correo"]; ?></td>
       
        <tr>
            <td>Director(a) Responsable</td>
            <td><?php echo $rInst["direcResponsable"]; ?></td>
        </tr>
        <tr>
            <td>Nro. de Alumnos</td>
            <td><?php echo $rInst["numAlumnos"]; ?></td>
        </tr>
        <tr>
            <td>Nro. de Docentes</td>
            <td><?php echo $rInst["numDocentes"]; ?></td>
        </tr>
        <tr>
            <td>Nro. de Administrativos</td>
            <td> <?php echo $rInst["numAdministrativos"]; ?></td>
        </tr>
        <tr>
            <td>Departamento:</td>
            <td>
                Lima
            </td>
        </tr>
        <td>Provincia :</td>
        <td>
        <?php
            $sql = "SELECT dis.nombre AS nombre_distrito, prov.nombre AS nombre_provincia, tbpe.idDistrito
            FROM tbinstitucioneducativa tbpe
            JOIN tbdistrito dis ON tbpe.idDistrito = dis.idDistrito
            JOIN tbprovincia prov ON dis.idProvincia = prov.idProvincia
            WHERE tbpe.idInstitucionEducativa = $cod;
            ";
            $f = mysqli_query($cn, $sql);
$r=mysqli_fetch_assoc($f);

            ?>    
            <?php 
            
            if ($r == null) {
            }else {
                echo $r["nombre_provincia"];

            }
            
            
        ?>
        </td>
        <tr>
            <td> Distrito</td>
        <td>
        <?php
            $sql = "SELECT dis.nombre, tbpe.idDistrito
            FROM tbdistrito dis
            JOIN tbinstitucioneducativa tbpe ON dis.idDistrito = tbpe.idDistrito
            WHERE tbpe.idInstitucionEducativa = $cod;
            ";
            $f = mysqli_query($cn, $sql);
$r=mysqli_fetch_assoc($f);

            ?>    
            <?php 
            if ($r == null) {
            }else {
                echo $r["nombre"];

            }
            
            ?>
        </td>
        </tr>
    </table>



    <?php } elseif ($tabla === "PersonaIndividual") { ?>




        <table  class="tbperfil">
        <tr>
            <td rowspan="10"> <a href="">
            <?php
                    $fotoPath = "FotosPerfil/" . $rPers["idPersona"] . ".jpg";
                    if (file_exists($fotoPath)) {
                        echo '<img src="' . $fotoPath . '" width="150" height="180">';
                    } else {
                        echo '<img src="FotosPerfil/foto-porDefecto.png" width="250" height="180">';
                    }
                    ?>
                <!-- <img src="img/LogoUNJFSC.png" alt="" width="250"> -->
            </a></td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><?php echo $rPers["nombre"]; ?> </td>
        </tr>
        <tr>
            <td>Apellidos</td>
        <td><?php echo $rPers["apellido"]; ?></td>
    </tr>
        <td>Email:</td>
        <td><?php echo $rPers["correo"]; ?></td>
        <tr>
            <td>Nro. DNI</td>
            <td><?php echo $rPers["dni"]; ?></td>
        </tr>
        <tr>
            <td>Edad</td>
            <td><?php echo $rPers["edad"]; ?></td>
        </tr>
        <tr>
            <td>Departamento:</td>
            <td>
                Lima
            </td>
        </tr>
        <td>Provincia :</td>
        <td>
        <?php
            $sql = "SELECT dis.nombre AS nombre_distrito, prov.nombre AS nombre_provincia, tbpe.idDistrito
            FROM tbpersonaindividual tbpe
            JOIN tbdistrito dis ON tbpe.idDistrito = dis.idDistrito
            JOIN tbprovincia prov ON dis.idProvincia = prov.idProvincia
            WHERE tbpe.idPersona = $cod;
            ";
            $f = mysqli_query($cn, $sql);
$r=mysqli_fetch_assoc($f);

            ?>    
            <?php 
             if ($r == null) {
            }else {
                echo $r["nombre_provincia"];

            }
            
             ?>
        </td>
        <tr>
            <td> Distrito</td>
        <td>
        <?php
            $sql = "SELECT dis.nombre, tbpe.idDistrito
            FROM tbdistrito dis
            JOIN tbpersonaindividual tbpe ON dis.idDistrito = tbpe.idDistrito
            WHERE tbpe.idPersona = $cod;
            ";
            $f = mysqli_query($cn, $sql);
$r=mysqli_fetch_assoc($f);

            ?>    
            
            <?php
            if ($r == null) {
            }else {
                echo $r["nombre"];

            } ?>
        </td>
        </tr>
    </table>
    <?php } ?>










<div class="cbtn">
<a href="actualizar.php" class="botones"><i class="fa-solid fa-user-pen"></i> Editar</a>
    <a href="imagenperfil.php" class="botones" ><i class="fa-solid fa-image-portrait"></i> Cambiar foto</a>

</div>
   











<?php

include 'Include/footer.php'
?>