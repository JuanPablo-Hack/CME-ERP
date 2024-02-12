document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("formAgregarServicio")
    .addEventListener("submit", agregarCliente);
});
async function agregarCliente(e) {
  e.preventDefault();
  var form = document.getElementById("formAgregarServicio");
  let data = new FormData(form);
  data.append("accion", "agregar");
  fetch("../controllers/Servicios.php", {
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
        fetch("../controllers/Servicios.php", {
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
function crearPDF(id) {
  var opt = {
    margin: 1,
    filename: "Carta_Instrucciones.pdf",
  };
  $.ajax({
    type: "POST",
    data: "id=" + id,
    url: "../controllers/CI_PDF.php",
    success: function (r) {
      var worker = html2pdf().set(opt).from(r).toPdf().save();
    },
  });
}

const operadores = () => {
  var id_paquete = $("#proveedor").val();
  var option = "<option value='0' selected>-Elije una opción-</option>";
  $.ajax({
    url: "../controllers/operadores_list.php",
    method: "POST",
    data: {
      id: id_paquete,
    },
    success: function (respuesta) {
      $("#lista_opera").attr("disabled", false);
      $("#lista_opera").html(option + respuesta);
    },
  });
  $.ajax({
    url: "../controllers/unidades_list.php",
    method: "POST",
    data: {
      id: id_paquete,
    },
    success: function (respuesta) {
      $("#unidades").attr("disabled", false);
      $("#unidades").html(option + respuesta);
    },
  });
};

const operadores2 = () => {
  var id_paquete2 = $("#operador_editar").val();
  console.log(id_paquete2);
  var option = "<option value='0' selected>-Elije una opción-</option>";
  $.ajax({
    url: "../controllers/operadores_list.php",
    method: "POST",
    data: {
      id: id_paquete2,
    },
    success: function (respuesta) {
      $("#lista_opera_editar").attr("readonly", false);
      $("#lista_opera_editar").html(option + respuesta);
    },
  });
  $.ajax({
    url: "../controllers/unidades_list.php",
    method: "POST",
    data: {
      id: id_paquete2,
    },
    success: function (respuesta) {
      $("#unidades_editar").attr("readonly", false);
      $("#unidades_editar").html(option + respuesta);
    },
  });
};
