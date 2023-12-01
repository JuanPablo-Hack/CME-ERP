<div class="modal fade" id="detallesManto<?php echo $row[
    'id'
]; ?>" tabindex="-1" role="dialog"
    aria-labelledby="varyModalLabel" aria-hidden="role=" alert"true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">
                    Detalles Mantenimiento
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form id="formMantenimientos">

<div class="form-row">
    
    <div class="form-group col-md-6">
        <label for="inputEmail4">Taller</label>
        <input type="text" class="form-control"readonly id="inputEmail4" value="<?php echo $row[
                                'taller'
                            ]; ?>">
    </div>
    <div class="form-group col-md-6">
        <label for="inputEmail4">No. Factura</label>
        <input type="text" class="form-control"readonly  value="<?php echo $row[
                                'nofactura'
                            ]; ?>" >
    </div>
    <div class="form-group col-md-6">
        <label for="inputEmail4">Descripción</label>
        <input type="text" class="form-control"readonly  value="<?php echo $row[
                                'descripcion'
                            ]; ?>">
    </div>
    <div class="form-group col-md-6">
        <label for="inputEmail4">Fecha</label>
        <input type="date" class="form-control"readonly  value="<?php echo $row[
                                'fecha'
                            ]; ?>">
    </div>
    <div class="form-group col-md-6">
        <label for="inputEmail4">KM</label>
        <input type="text" class="form-control"readonly  value="<?php echo $row[
                                'km'
                            ]; ?>">
    </div>
   
    <div class="form-group col-md-6">
        <label for="inputEmail4">Proximo Mantenimiento</label>
        <input type="date" class="form-control"readonly value="<?php echo $row[
                                'prox_manto'
                            ]; ?>">
    </div>
    <div class="form-group col-md-6">
        <label for="inputEmail4">No. Placas</label>
        <input type="text" class="form-control"readonly value="<?php echo $row[
                                'no_placas'
                            ]; ?>">
    </div>
    <div class="form-group col-md-6">
        <label for="inputEmail4">Autoriza</label>
        <input type="text" class="form-control"readonly value="<?php echo $row[
                                'autoriza'
                            ]; ?>">
    </div>
    <div class="form-group col-md-6">
        <label for="inputEmail4">Importe</label>
        <input type="text" class="form-control"readonly value="<?php echo $row[
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
   
</div>
</form>
            </div>

        </div>
    </div>
</div>