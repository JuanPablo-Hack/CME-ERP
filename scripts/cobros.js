document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("formCobros")
    .addEventListener("submit", agregarCliente);
});
$(document).ready(function () {
  $("#tabla_cobros").DataTable({
    dom: "Bfrtip",
    buttons: ["excel", "print"],
  });
});
async function agregarCliente(e) {
  e.preventDefault();
  var form = document.getElementById("formCobros");
  let data = new FormData(form);
  data.append("accion", "agregar");
  fetch("../controllers/Cobros.php", {
    method: "POST",
    body: data,
  })
    .then((result) => result.text())
    .then((result) => {
      if (result == 1) {
        document.getElementById("success").style.display = "inherit";
        document.getElementById("wrong").style.display = "none";
        setTimeout(function () {
          location.reload();
        }, 2000);
      } else {
        document.getElementById("success").style.display = "none";
        document.getElementById("wrong").style.display = "inherit";
      }
    });
}
function CambiarEstado(IDCotizacion, EstadoCotizacion) {
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: "btn btn-success",
      cancelButton: "btn btn-danger",
    },
    buttonsStyling: false,
  });

  swalWithBootstrapButtons
    .fire({
      title: "Estas seguro?",
      text: "¡No podrás revertir esto!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Si, cambiar de estado",
      cancelButtonText: "No, cancelar!",
      reverseButtons: true,
    })
    .then((result) => {
      if (result.isConfirmed) {
        let data = new FormData();
        data.append("IDCotizacion", IDCotizacion);
        data.append("EstadoCotizacion", EstadoCotizacion);
        data.append("accion", "CambiarEstado");
        fetch("../controllers/Cobros.php", {
          method: "POST",
          body: data,
        })
          .then((result) => result.text())
          .then((result) => {
            if (result == 1) {
              swalWithBootstrapButtons.fire(
                "Cambiado de estado!",
                "El estado de transacción se ha realizado sastifactoriamente.",
                "success"
              );
              setTimeout(function () {
                location.reload();
              }, 3000);
            }
          })
          .catch((error) => {
            console.log(error);
          });
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          "Cancelado",
          "Tu archivo ha sido salvado",
          "error"
        );
      }
    });
}

function cambiar_conceptos() {
  var num_conceptos = $("#num_conceptos").val();
  $.ajax({
    url: "../modals/cobros/conceptos_cliente.php",
    method: "POST",
    data: {
      num_conceptos: num_conceptos,
    },
    success: function (respuesta) {
      $("#conceptos_cliente").html(respuesta);
    },
  });
}

function cambiar_conceptos_proveedor() {
  var num_conceptos_proveedor = $("#num_conceptos_proveedor").val();
  $.ajax({
    url: "../modals/cobros/conceptos_proveedores.php",
    method: "POST",
    data: {
      num_conceptos_proveedor: num_conceptos_proveedor,
    },
    success: function (respuesta) {
      $("#conceptos_proveedores").html(respuesta);
    },
  });
}
