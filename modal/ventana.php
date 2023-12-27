<?php
    include("../Include/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    
<table class="table table-success table-striped table-hover table-bordered table-sm table-responsive-sm" id="tbadm">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">nombre</th>
            <th scope="col">ap</th>
            <th scope="col">opcione</th>
        </tr>
    </thead>

    
    <tbody>
    <?php


$sql = "SELECT * FROM tbinstitucioneducativa";
$resultado = mysqli_query($cn, $sql);
while ($fila = mysqli_fetch_assoc($resultado)) { 
$arreglo=$fila['idInstitucionEducativa'].','.$fila['nombre'].','.$fila['direcResponsable'];

?>
        <tr>
            <th scope="row"><?php echo $fila["idInstitucionEducativa"]?></th>
            <td><?php echo $fila["nombre"]?></td>
            <td><?php echo $fila["direcResponsable"]?></td>


            <td>
            <button type="button" class="btn btn-outline-success"  data-bs-toggle="modal" data-bs-target="#modificar" onclick="modificar('<?php echo $arreglo?>')">Modificar</button>

            </td>
        </tr>
    
        <?php
}?>
    </tbody>
</table>

    

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<!--modal-->
<div class="modal fade" id="modificar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form id="form_">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label" >Recipient:</label>
            <input type="text" class="form-control" id="id_" name="id_">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label" >Message:</label>
            <input type="text" class="form-control" id="nombre_" name="nombre_">

            <!-- <textarea class="form-control" id="message-text" id="nombre_" name="nombre_"></textarea> -->
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="modificar_">Send message</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript"  src="../js/funciones.js"> </script>

</body>
</html>