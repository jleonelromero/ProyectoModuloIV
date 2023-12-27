function modificar(arreglo){
    cadena =arreglo.split(',');
    alert(cadena);
    $("#id_").val(cadena[0]);
    $("#nombre_").val(cadena[1]);
}
$('#modificar_').click(function(){
    let subir = $('#form_').serialize();
    // alert(subir);
    $.ajax({
        url: '../p_sugerencia.php',
        type:"Post",
        data: subir,

        success:function (variable) {
            $('#tbadm').load('../modal/ventana.php #tbadm');
            // alert("exitoso");
            $('#modificar').modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').remove();
            
        }
    })
})