function modificar(arreglo){
    cadena =arreglo.split(',');
    // alert(cadena);
    $("#id_").val(cadena[0]);
    $("#nombre_").text(cadena[1]);
    $("#correo_").text(cadena[2]);

}
$('#enviar_').click(function(){
    let subir = $('#form_').serialize();
    // alert(subir);
    $.ajax({
        url: 'p_subir.php',
        type: "Post",
        data: subir,

        success:function (variable) {
            // alert("exitoso");
            $('#responder').modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').remove();
            
        }
    })
})