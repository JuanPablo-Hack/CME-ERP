<div class="modal fade" id="extrasServicio<?php echo $row[
    'id'
]; ?>" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="role=" alert"true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">
                    Agregar servicios extras
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../controllers/Servicios.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row[
                        'id'
                    ]; ?>">
                    <input type="hidden" name="accion" value="extras">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">COSTOS EXTRAS</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputZip">CONTENEDOR ASEGURADO</label>
                            <select class="form-control" name="datos[]" id="proveedor" onchange="operadores()">
                                <option selected>-Selecciona una opción-</option>
                                <option value="ASEGURADO">CONTENEDOR ASEGURADO</option>
                                <option value="NO ASEGURADO">CONTENEDOR NO ASEGURADO</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">
                            Cerrar
                        </button>
                        <button type="submit" class="btn mb-2 btn-primary">
                            Agregar extras
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>