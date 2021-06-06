/**
 * MÉTODO PARA REGISTRAR EL TIPO DE CARGO
 */
 $(document).ready(function () {
    $("#FormRegistrarCategoria").on('submit', function (e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        $.ajax({
            url: 'model/registrarCategoria.php',
            data: datos,
            type: $(this).attr("method"),
            dataType: "json",
            beforeSend: function () {
                respuestaInfoEspera("Registrando... ¡Espere por favor!");
            },
            success: function (data) {
                if (data.respuesta == 'exito') {
                    ingresoExitoso("Exito!", "Se registro correctamente la categoria.");
                    setTimeout(function () {
                        location.reload();
                    }, 1000);
                } else if (data.respuesta == 'error') {
                    respuestaError("Error!", "Ocurrio un error al registrar.");
                } else if (data.respuesta == 'vacio') {
                    respuestaError("Error!", "Debe de completar los campos.");
                }
            }
        });
    });
});