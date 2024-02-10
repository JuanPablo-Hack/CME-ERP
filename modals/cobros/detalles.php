<div class="modal fade" id="detallesCobros<?php echo $row['id']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="varyModalLabel" aria-hidden="role=" alert"true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">
                    Agregar Cobros
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
                <form id="formCobros">
                    <h2>Cobros de Cliente</h2>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">COSTO CLIENTE</label>
                            <input type="text" class="form-control" name="datos[]" readonly
                                value="<?php echo $row['costo_cliente']; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">IVA</label>
                            <input type="text" class="form-control" name="datos[]" readonly
                                value="<?php echo $row['costo_cliente'] * .16; ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">RETENCION</label>
                            <input type="text" class="form-control" name="datos[]" readonly
                                value="<?php echo $row['costo_cliente'] * .04; ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">ESTADIAS</label>
                            <input type="text" class="form-control" name="datos[]" readonly
                                value="<?php echo $row['estadias_cliente']; ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">IVA ESTADIAS</label>
                            <input type="text" class="form-control" name="datos[]" readonly
                                value="<?php echo $row['estadias_cliente'] * .16; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">LAVADO</label>
                            <input type="text" class="form-control" name="datos[]" readonly
                                value="<?php echo $row['lavado_cliente']; ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">BURREO</label>
                            <input type="text" class="form-control" name="datos[]" readonly
                                value="<?php echo $row['burreo_cliente']; ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">DEMORAS</label>
                            <input type="text" class="form-control" name="datos[]" readonly
                                value="<?php echo $row['demoras_cliente']; ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">MANIOBRAS</label>
                            <input type="text" class="form-control" name="datos[]" readonly
                                value="<?php echo $row['maniobras_cliente']; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">OTROS</label>
                            <input type="text" class="form-control" name="datos[]" readonly
                                value="<?php echo $row['otros_cliente']; ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">COMISION</label>
                            <input type="text" class="form-control" name="datos[]" readonly
                                value="<?php echo $row['comision_cliente']; ?>">
                        </div>
                    </div>
                    <hr>
                    <h2>Cobros de Proveedor</h2>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">COSTO PROVEEDOR</label>
                            <input type="text" class="form-control" name="datos[]" readonly
                                value="<?php echo $row['costo_proveedor']; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">IVA</label>
                            <input type="text" class="form-control" name="datos[]" readonly
                                value="<?php echo $row['costo_proveedor'] * .16; ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">RETENCION</label>
                            <input type="text" class="form-control" name="datos[]" readonly
                                value="<?php echo $row['costo_proveedor'] * .04; ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">ESTADIAS</label>
                            <input type="text" class="form-control" name="datos[]" readonly
                                value="<?php echo $row['estadias_proveedor'] * .16; ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">IVA ESTADIAS</label>
                            <input type="text" class="form-control" name="datos[]" readonly
                                value="<?php echo $row['estadias_proveedor'] * .16; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">LAVADO</label>
                            <input type="text" class="form-control" name="datos[]" readonly
                                value="<?php echo $row['lavado_proveedor']; ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">BURREO</label>
                            <input type="text" class="form-control" name="datos[]" readonly
                                value="<?php echo $row['burreo_proveedor']; ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">DEMORAS</label>
                            <input type="text" class="form-control" name="datos[]" readonly
                                value="<?php echo $row['demoras_proveedor']; ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">MANIOBRAS</label>
                            <input type="text" class="form-control" name="datos[]" readonly
                                value="<?php echo $row['maniobras_proveedor']; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">OTROS</label>
                            <input type="text" class="form-control" name="datos[]" readonly
                                value="<?php echo $row['otros_proveedor']; ?>">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="inputEmail4">COMISION</label>
                            <input type="text" class="form-control" name="datos[]" readonly
                                value="<?php echo $row['comision_proveedor']; ?>">
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">OBSERVACIONES</label>
                            <textarea class="form-control" id="example-textarea" rows="4" spellcheck="false"
                                name="datos[]" readonly value="<?php echo $row['observaciones']; ?>"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">
                            Cerrar
                        </button>
                        <button type="submit" class="btn mb-2 btn-primary">
                            Agregar Cobro
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>