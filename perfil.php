<?php

include'adcabe.php';
?>

<form action="" method="post">
    <table border="2">
        <tr>
            <td colspan="2"> <a href="">
                <img src="img/LogoUNJFSC.png" alt="" width="250">
            </a></td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td>jose leonel </td>
        </tr>
        <td>Email:</td>
        <td>leonelromero@gmail.com</td>
    </table>
</form>

<?php
//if($r[estado] == 0 ){
    echo "necesitas actualizar tus datos";

//}
$nu=1;
if ($nu == 2) {
    # code...
    echo '
    <form action="" method="post">
        <table border="2">
            <tr>
                <td colspan="2"> <a href="">
                    <img src="img/LogoUNJFSC.png" alt="" width="250">
                </a></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td>jose leonel </td>
            </tr>
            <td>Email:</td>
            <td>leonelromero@gmail.com</td>
        </table>
    </form>';
}else {
    echo "nosue ";
    # code...
}
?>










<?php
include 'Include/footer.php'
?>