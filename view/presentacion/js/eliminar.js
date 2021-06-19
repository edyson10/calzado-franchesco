/**
 * METODO PARA ELIMINAR LA MATERIA PRIMA
 */
function eliminarMateriaPrima(id) {
  Swal.fire({
    title: "Eliminar",
    text: "¿Seguro que quieres eliminar la materia prima?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, eliminar",
  }).then((result) => {
    if (result.value) {
      $.ajax({
        url: "model/eliminar.php",
        data: { eliminar: "eliminaMateriaPrima", id: id },
        type: "POST",
        beforeSend: function () {
          respuestaInfoEspera("¡Espere por favor!");
        },
        success: function (data) {
          var resultado = JSON.parse(data);
          if (resultado.respuesta == "exito") {
            ingresoExitoso("Eliminado!", "La materia prima ha sido eliminado.");
            setTimeout(function () {
              location.reload();
            }, 1000);
          } else {
            respuestaError("Error!", "No se pudo eliminar!.");
          }
        },
      });
    }
  });
}

/**
 * METODO PARA ELIMINAR EL PERSONAL
 */
function eliminarPersonal(id) {
  Swal.fire({
    title: "Eliminar",
    text: "¿Seguro que quieres eliminar el personal?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, eliminar",
  }).then((result) => {
    if (result.value) {
      $.ajax({
        url: "model/eliminar.php",
        data: { eliminar: "eliminaPersonal", id: id },
        type: "POST",
        beforeSend: function () {
          respuestaInfoEspera("¡Espere por favor!");
        },
        success: function (data) {
          var resultado = JSON.parse(data);
          if (resultado.respuesta == "exito") {
            ingresoExitoso("Eliminado!", "El usuario ha sido eliminado.");
            setTimeout(function () {
              location.reload();
            }, 1000);
          } else {
            respuestaError("Error!", "No se pudo eliminar!.");
          }
        },
      });
    }
  });
}

/**
 * METODO PARA ELIMINAR LA CATEGORIA
 */
function eliminarCategoria(id) {
  Swal.fire({
    title: "Eliminar",
    text: "¿Seguro que quieres eliminar la categoria?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, eliminar",
  }).then((result) => {
    if (result.value) {
      $.ajax({
        url: "model/eliminar.php",
        data: { eliminar: "eliminarCategoria", id: id },
        type: "POST",
        beforeSend: function () {
          respuestaInfoEspera("¡Espere por favor!");
        },
        success: function (data) {
          var resultado = JSON.parse(data);
          if (resultado.respuesta == "exito") {
            ingresoExitoso("Eliminado!", "La categoria ha sido eliminado.");
            setTimeout(function () {
              location.reload();
            }, 1000);
          } else {
            respuestaError("Error!", "No se pudo eliminar!.");
          }
        },
      });
    }
  });
}

/**
 * METODO PARA ELIMINAR EL PRODUCTO
 */
function eliminarProducto(id) {
  Swal.fire({
    title: "Eliminar",
    text: "¿Seguro que quieres eliminar el producto?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, eliminar",
  }).then((result) => {
    if (result.value) {
      $.ajax({
        url: "model/eliminar.php",
        data: { eliminar: "eliminarProducto", id: id },
        type: "POST",
        beforeSend: function () {
          respuestaInfoEspera("¡Espere por favor!");
        },
        success: function (data) {
          var resultado = JSON.parse(data);
          if (resultado.respuesta == "exito") {
            ingresoExitoso("Eliminado!", "El produccto ha sido eliminado.");
            setTimeout(function () {
              location.reload();
            }, 1000);
          } else {
            respuestaError("Error!", "No se pudo eliminar!.");
          }
        },
      });
    }
  });
}
