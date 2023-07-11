<div class="modal fade" id="editarTipoContenedor<?php echo $row['id']  ?>" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="role="
    alert"true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">
                    Editar Tipo Contenedor
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formClienteAgregar">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Nombre</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4" value="<?php echo $row['nombre']  ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">
                            Cerrar
                        </button>
                        <button type="submit" class="btn mb-2 btn-primary">
                            Editar Cliente
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>