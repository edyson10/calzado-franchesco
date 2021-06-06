/**
 * MÉTODO PARA REGISTRAR LA CATEGORIA
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

/*
METODO PARA REGISTRAR EL PERSONAL
*/
$(document).ready(function () {
    $('#FormRegistrarPersonal').validate({
        rules: {
            nombrePersonal: { required: true },
            apellidoPersonal: { required: true },
            identificacionPersonal: { required: true, number: true },
            fechaNacimientoPersonal: { required: true },
            contrasenaPersonal: { required: true },
            repContrasenaPersonal: { required: true }
        },
        messages: {
            nombrePersonal: { required: "Debe de completar los campos." },
            apellidoPersonal: { required: "Debe de completar los campos." },
            identificacionPersonal: { required: "Debe de completar los campos.", number: "Solo se aceptan número." },
            fechaNacimientoPersonal: { required: "Debe de completar los campos." },
            contrasenaPersonal: { required: "Debe de completar los campos." },
            repContrasenaPersonal: { required: "Debe de completar los campos." }
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },
        submitHandler: function () {
            var datos = {
                nombrePersonal: $("#nombrePersonal").val(),
                apellidoPersonal: $("#apellidoPersonal").val(),
                identificacionPersonal: $("#identificacionPersonal").val(),
                fechaNacimientoPersonal: $("#fechaNacimientoPersonal").val(),
                contrasenaPersonal: $("#contrasenaPersonal").val(),
                repContrasenaPersonal: $("#repContrasenaPersonal").val(),
                rolPersonal: $("#rolPersonal").val()
            }
            $.ajax({
                url: 'model/registrarPersonal.php',
                method: 'post',
                data: datos,
                dataType: "json",
                type: 'POST',
                beforeSend: function () {
                    respuestaInfoEspera("Registrando... ¡Espere por favor!");
                },
                success: function (data) {
                    if (data.respuesta == 'exito') {
                        ingresoExitoso("Exito!", "Se registro correctamente el personal.");
                        setTimeout(function () {
                            window.location.href = "Ver-personal";
                        }, 1000);
                    } else if (data.respuesta == 'error') {
                        respuestaError("Error!", "Ocurrio un error al registrar el personal");
                    } else if (data.respuesta == 'nocontrasena') {
                        respuestaError("Error!", "Las contraseñas deben ser iguales.");
                    } else if (data.respuesta == 'noseleccione') {
                        respuestaError("Error!", "Debe de seleccionar un rol correcto.");
                    }
                }
            });
        }
    });
});
