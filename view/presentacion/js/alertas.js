function ingresoExitoso(titulo, mensaje) {
    Swal.fire(
        titulo,
        mensaje,
        'success'
    )
}

function respuestaError(titulo, mensaje) {
    Swal.fire({
        icon: 'error',
        title: titulo,
        text: mensaje
    })
}

function respuestaAdvertencia(titulo, mensaje) {
    Swal.fire({
        icon: 'warning',
        title: titulo,
        text: mensaje
    })
}

function respuestaInfoEspera(mensaje) {
    Swal.fire({
        icon: 'warning',
        title: 'Espere',
        text: mensaje,
        showConfirmButton: false,
    })
}