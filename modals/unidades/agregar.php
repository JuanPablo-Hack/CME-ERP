<div class="modal fade" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="role="
    alert"true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">
                    Agregar Unidad
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" role="alert" style="display: none;" id="success">Felicidades tu
                    registro a sido agregado con éxito! </div>
                <div class="alert alert-danger" role="alert" style="display: none;" id="wrong"> Oops hemos tenido un
                    error en la base de datos, revisa que la información sea la correcta! </div>
                <form id="formUnidadAgregar">
                    <div class="form-group mb-12">
                        <label for="custom-select">Tipo de unidad</label>
                        <select class="custom-select" id="num_conceptos" onchange="cambiar_conceptos()" name="datos[]">
                          <option selected="">-Selecciona un tipo-</option>
                          <option value="1">Propia</option>
                          <option value="2">Externa</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <div style="display: none;" id="proveedor">
                        <div class="form-group col-md-6" >
                            <label for="inputZip" >PROVEEDOR</label>
                            <select id="inputState" class="form-control" name="datos[]">
                            <option selected value="0">Selecciona una opción</option>
                            <?php foreach (ObtenerProveedores() as $row) { ?>
                                <option value="<?php echo $row[
                                    'id'
                                ]; ?>"><?php echo $row[
    'razon_social'
]; ?></option>
                            <?php } ?>
                            </select>
                        </div>
                        </div>

<div class="form-group col-md-6">
    <label for="inputPassword4">PERMISO SCT</label>
    <input type="text" class="form-control" name="datos[]" id="inputPassword4">
</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
    <label for="inputEmail4">NÚMERO DE PERMISO SCT</label>
    <input type="text" class="form-control" name="datos[]" id="inputEmail4">
</div>
<div class="form-group col-md-6">
    <label for="inputEmail4">PLACA DEL VEHICULO</label>
    <input type="text" class="form-control" name="datos[]" id="inputEmail4">
</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
    <label for="inputEmail4">AÑO DEL MODELO DEL VEHICULO</label>
    <input type="text" class="form-control" name="datos[]" id="inputEmail4">
</div>
<div class="form-group col-md-6">
    <label for="inputEmail4">PESO BRUTO VEHICULAR</label>
    <input type="text" class="form-control" name="datos[]" id="inputEmail4">
</div>
</div>
<div class="form-row">

<div class="form-group col-mdp-6">
    <label for="inputCity">CONFIGURACIÓN VEHICULAR</label>
    <input type="text" class="form-control" name="datos[]" id="inputCity">
</div>
<div class="form-group col-mdp-6">
    <label for="inputCity">PLACAS DEL CONTENEDOR</label>
    <input type="text" class="form-control" name="datos[]" id="inputCity">
</div>
<div class="form-group col-mdp-6">
    <label for="inputCity">NOMBRE DE LA ASEGURADORA DE RESPONSABILIDAD CIVIL</label>
    <input type="text" class="form-control" name="datos[]" id="inputCity">
</div>
<div class="form-group col-mdp-6">
    <label for="inputCity">NO. DE POLIZA DE SEGURO POR RESPONSABILIDAD CIVIL</label>
    <input type="text" class="form-control" name="datos[]" id="inputCity">
</div>
<div class="form-group col-mdp-6">
    <label for="inputCity">ASEGURADORA DE DAÑOS AL MEDIO AMBIENTE</label>
    <input type="text" class="form-control" name="datos[]" id="inputCity">
</div>
<div class="form-group col-mdp-6">
    <label for="inputCity">NO. DE POLIZA DE SEGURO POR  DAÑOS AL MEDIO AMBIENTE</label>
    <input type="text" class="form-control" name="datos[]" id="inputCity">
</div>
</div>

                    <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">
                            Cerrar
                        </button>
                        <button type="submit" class="btn mb-2 btn-primary">
                            Agregar Unidad
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>