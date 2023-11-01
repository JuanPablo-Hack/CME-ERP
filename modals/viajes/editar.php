<div class="modal fade"  id="editarCliente<?php echo $row[
    'id'
]; ?>" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="role=" alert"true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">
                    Editar viajes
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formClienteAgregar" action="../controllers/Viajes.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row[
                    'id'
                ]; ?>">
                    <input type="hidden" name="accion" value="editar">
                    <div class="form-row">
                        
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">DIESEL</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4" value="<?php echo $row[
                                'diesel'
                            ]; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">INGRESO PUERTO</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4" value="<?php echo $row[
                                'ingreso_puerto'
                            ]; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">MANIOBRAS</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4" value="<?php echo $row[
                                'maniobras'
                            ]; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">PISTAS</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4" value="<?php echo $row[
                                'pistas'
                            ]; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">OPERADOR</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4" value="<?php echo $row[
                                'operador'
                            ]; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">OTROS</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4" value="<?php echo $row[
                                'otros'
                            ]; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">COMIDAS</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4" value="<?php echo $row[
                                'comida'
                            ]; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">COMISIÓN</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4" value="<?php echo $row[
                                'comision'
                            ]; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">OBSERVACIONES</label>
                            <textarea class="form-control" id="example-textarea" rows="4" spellcheck="false" name="datos[]"><?php echo $row[
                                'observaciones'
                            ]; ?></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">
                            Cerrar
                        </button>
                        <button type="submit" class="btn mb-2 btn-primary">
                            Editar viaje
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>