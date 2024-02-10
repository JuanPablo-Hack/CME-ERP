<div class="modal fade" id="actualizarCobros<?php echo $row['id']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="varyModalLabel" aria-hidden="role=" alert"true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">
                    Actualizar Estado De Cuenta
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../controllers/Cobros.php" method="post">
                    <div class="form-row">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="hidden" name="accion" value="actualizar">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">PAGADO PROVEEDOR</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">PAGADO CLIENTE</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">OBSERVACIONES</label>
                            <textarea class="form-control" id="example-textarea" rows="4" spellcheck="false"
                                name="datos[]"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">
                            Cerrar
                        </button>
                        <button type="submit" class="btn mb-2 btn-primary">
                            Actualizar
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>