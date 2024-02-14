<div class="modal fade" id="editarCobros<?php echo $row[
    'id'
]; ?>" tabindex="-1" role="dialog"
    aria-labelledby="varyModalLabel" aria-hidden="role=" alert"true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">
                    Editar Cobros
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../controllers/Cobros.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $row[
                        'id'
                    ]; ?>">
                    <input type="hidden" name="accion" value="editar">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputState">REF. SERVICIO
                            </label>
                            <select id="inputState" class="form-control" name="datos[]">
                                <option selected value="<?php echo $row[
                                    'ref_int'
                                ]; ?>">Selecciona una opción</option>
                                <?php foreach (obtenerServicios() as $row2) { ?>
                                <option value="<?php echo $row2[
                                    'id'
                                ]; ?>"><?php echo 'CME-' .
    $row2['id']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">NO. FACTURA</label>
                            <input type="text" class="form-control" name="datos[]" value="<?php echo $row[
                                'no_factura'
                            ]; ?>">
                        </div>
                    </div>
                    <h2>Cobros de Cliente</h2>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">COSTO CLIENTE</label>
                            <input type="text" class="form-control" name="datos[]"
                                value="<?php echo $row['costo_cliente']; ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">ESTADIAS</label>
                            <input type="text" class="form-control" name="datos[]"
                                value="<?php echo $row['estadias_cliente']; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">LAVADO</label>
                            <input type="text" class="form-control" name="datos[]"
                                value="<?php echo $row['lavado_cliente']; ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">BURREO</label>
                            <input type="text" class="form-control" name="datos[]"
                                value="<?php echo $row['burreo_cliente']; ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">DEMORAS</label>
                            <input type="text" class="form-control" name="datos[]"
                                value="<?php echo $row['demoras_cliente']; ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">MANIOBRAS</label>
                            <input type="text" class="form-control" name="datos[]"
                                value="<?php echo $row[
                                    'maniobras_cliente'
                                ]; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">OTROS</label>
                            <input type="text" class="form-control" name="datos[]"
                                value="<?php echo $row['otros_cliente']; ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">COMISION</label>
                            <input type="text" class="form-control" name="datos[]"
                                value="<?php echo $row['comision_cliente']; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">NOMBRE COMISIÓN</label>
                            <input type="text" class="form-control" name="datos[]" 
                                value="<?php echo $row[
                                    'nombre_comision_cliente'
                                ]; ?>">
                        </div>
                    </div>
                    <hr>
                    <h2>Cobros de Proveedor</h2>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">COSTO PROVEEDOR</label>
                            <input type="text" class="form-control" name="datos[]"
                                value="<?php echo $row['costo_proveedor']; ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">ESTADIAS</label>
                            <input type="text" class="form-control" name="datos[]"
                                value="<?php echo $row[
                                    'estadias_proveedor'
                                ]; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">LAVADO</label>
                            <input type="text" class="form-control" name="datos[]"
                                value="<?php echo $row['lavado_proveedor']; ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">BURREO</label>
                            <input type="text" class="form-control" name="datos[]"
                                value="<?php echo $row['burreo_proveedor']; ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">DEMORAS</label>
                            <input type="text" class="form-control" name="datos[]"
                                value="<?php echo $row[
                                    'demoras_proveedor'
                                ]; ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">MANIOBRAS</label>
                            <input type="text" class="form-control" name="datos[]"
                                value="<?php echo $row[
                                    'maniobras_proveedor'
                                ]; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">OTROS</label>
                            <input type="text" class="form-control" name="datos[]"
                                value="<?php echo $row['otros_proveedor']; ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">COMISION</label>
                            <input type="text" class="form-control" name="datos[]"
                                value="<?php echo $row[
                                    'comision_proveedor'
                                ]; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">NOMBRE COMISIÓN</label>
                            <input type="text" class="form-control" name="datos[]" 
                                value="<?php echo $row[
                                    'nombre_comision_proveedor'
                                ]; ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">
                            Cerrar
                        </button>
                        <button type="submit" class="btn mb-2 btn-primary">
                            Editar Cobro
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>