document.addEventListener("DOMContentLoaded", function () {
    document
        .getElementById("formOperadorAgregar")
        .addEventListener("submit", agregarCliente);

});
async function agregarCliente(e) {
    e.preventDefault();
    var form = document.getElementById("formOperadorAgregar");
    let data = new FormData(form);
    data.append("accion", "agregar");
    fetch("../controllers/Operadores.php", {
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
function eliminarUnidad(id) {
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
            confirmButtonText: "Si, eliminar",
            cancelButtonText: "No, cancelar!",
            reverseButtons: true,
        })
        .then((result) => {
            if (result.isConfirmed) {
                let data = new FormData();
                data.append("id", id);
                data.append("accion", "eliminar");
                fetch("../controllers/Unidades.php", {
                    method: "POST",
                    body: data,
                })
                    .then((result) => result.text())
                    .then((result) => {
                        if (result == 1) {
                            swalWithBootstrapButtons.fire(
                                "Eliminado!",
                                "El registro ha sido eliminado.",
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
    var x = document.getElementById("num_conceptos").value;
    switch (x) {
      case "1":
        document.getElementById("proveedor").style.display = "none";
        break;
      case "2":
        document.getElementById("proveedor").style.display = "inherit";
        break;
     
    }
  }

  function cambiar_conceptos_2() {
    //TODO: Terminar el tipo de concepto
    var x = document.getElementById("num_conceptos_2").value;
    console.log(x)
    // switch (x) {
    //   case "1":
    //     document.getElementById("proveedor_2").style.display = "none";
    //     break;
    //   case "2":
    //     document.getElementById("proveedor_2").style.display = "inherit";
    //     break;
     
    // }
  }