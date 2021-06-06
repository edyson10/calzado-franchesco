/*
METODO PARA INICIAR SESION
*/
$(document).ready(function () {
    $('#FormLogin').validate({
        rules: {
            user: { required: true },
            password: { required: true }
        },
        messages: {
            user: { required: "Debe de completar los campos." },
            password: { required: "Debe de completar los campos." }
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
                user: $("#user").val(),
                password: $("#password").val(),
                rol: $("#rol").val()
            }
            $.ajax({
                url: 'model/login.php',
                method: 'post',
                data: datos,
                dataType: "json",
                type: 'POST',
                beforeSend: function () {
                    respuestaInfoEspera("Iniciando sesión. ¡Espere por favor!");
                },
                success: function (data) {
                    console.log(data)
                    if (data.respuesta == 'exito') {
                        ingresoExitoso("¡Inicio Sesión!", "Bienvenido(a) a Calzado Franchesco");
                        setTimeout(function () {
                            location.reload();
                        }, 1000);
                    } else if (data.respuesta == 'seleccion') {
                        respuestaError("¡Error!", "Debes de seleccionar un rol correcto");
                    } else if (data.respuesta == 'error') {
                        respuestaError("¡Error!", "Usuario, contraseña y/ o rol incorrectos");
                    } else if (data.respuesta == 'estado') {
                        respuestaError("¡Error!", "No tiene permiso para ingresar a la plataforma");
                    }
                }
            });
        }
    });
});
