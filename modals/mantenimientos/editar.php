<div class="modal fade" id="editarManto<?php echo $row[
    'id'
]; ?>" tabindex="-1" role="dialog"
    aria-labelledby="varyModalLabel" aria-hidden="role=" alert"true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">
                    Editar Mantenimiento
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="../controllers/Mantenimientos.php" method="POST">
            <input type="hidden" name="accion" value="editar">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputState">Unidad
        </label>
        <select id="inputState" class="form-control" name="datos[]">
        <option value="<?php echo $row[
            'unidad'
        ]; ?>" selected>Selecciona una opción</option>
        <?php foreach (ObtenerUnidadesPropias() as $unidades) { ?>
            <option value="<?php echo $unidades['id']; ?>"><?php echo $unidades[
    'placa'
]; ?></option>
        <?php } ?>
        </select>
    </div>
    <div class="form-group col-md-6">
        <label for="inputEmail4">Taller</label>
        <input type="text" class="form-control" name="datos[]" id="inputEmail4" value="<?php echo $row[
            'taller'
        ]; ?>">
    </div>
    <div class="form-group col-md-6">
        <label for="inputEmail4">No. Factura</label>
        <input type="text" class="form-control" name="datos[]"  value="<?php echo $row[
            'nofactura'
        ]; ?>" >
    </div>
    <div class="form-group col-md-6">
        <label for="inputEmail4">Descripción</label>
        <input type="text" class="form-control" name="datos[]"  value="<?php echo $row[
            'descripcion'
        ]; ?>">
    </div>
    <div class="form-group col-md-6">
        <label for="inputEmail4">Fecha</label>
        <input type="date" class="form-control" name="datos[]"  value="<?php echo $row[
            'fecha'
        ]; ?>">
    </div>
    <div class="form-group col-md-6">
        <label for="inputEmail4">KM</label>
        <input type="text" class="form-control" name="datos[]"  value="<?php echo $row[
            'km'
        ]; ?>">
    </div>
    <div class="form-group col-md-6">
        <label for="inputState">Operador
        </label>
        <select id="inputState" class="form-control" name="datos[]">
        <option value="<?php echo $row[
            'operador'
        ]; ?>" selected>Selecciona una opción</option>
        <?php foreach (ObtenerOperadoresPropios() as $operadores) { ?>
            <option value="<?php echo $operadores[
                'id'
            ]; ?>"><?php echo $operadores['nombre']; ?></option>
        <?php } ?>
        </select>
    </div>
    <div class="form-group col-md-6">
        <label for="inputEmail4">Proximo Mantenimiento</label>
        <input type="date" class="form-control" name="datos[]" value="<?php echo $row[
            'prox_manto'
        ]; ?>">
    </div>
    <div class="form-group col-md-6">
        <label for="inputEmail4">Autoriza</label>
        <input type="text" class="form-control" name="datos[]" value="<?php echo $row[
            'autoriza'
        ]; ?>">
    </div>
    <div class="form-group col-md-6">
        <label for="inputEmail4">Importe</label>
        <input type="text" class="form-control" name="datos[]" value="<?php echo $row[
            'importe'
        ]; ?>">
    </div>
</div>
<div class="servicios_seleccionados">

</div>
<div class="modal-footer">
    <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">
        Cerrar
    </button>
    <button type="submit" class="btn mb-2 btn-primary">
        Editar Mantenimientos
    </button>
</div>
</form>
            </div>

        </div>
    </div>
</div>