<div class="modal fade" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="role="
    alert"true">
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
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputState">REF. SERVICIO
                            </label>
                            <select id="inputState" class="form-control" name="datos[]">
                                <option selected>Selecciona una opción</option>
                                <?php foreach (obtenerServiciosNoFacturados() as $row) { ?>
                                <option value="<?php echo $row[
                                    'id'
                                ]; ?>"><?php echo 'CME-' .
    $row['id']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">NO. FACTURA CLIENTE</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                    </div>
                    <h2>Cobros de Cliente</h2>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">COSTO CLIENTE</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">ESTADIAS</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">LAVADO</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">BURREO</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">DEMORAS</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">MANIOBRAS</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">OTROS</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">COMISIÓN</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">NOMBRE COMISIÓN</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-4">
                                <label for="inputEmail4">OBLIGACIONES FISCALES</label> <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"name="iva_costo_cliente" value="1">
                                    <label class="form-check-label" for="inlineCheckbox1">IVA COSTO CLIENTE</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="ret_costo_cliente" value="1">
                                    <label class="form-check-label" for="inlineCheckbox2">RETENCIÓN COSTO CLIENTE</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="iva_esta_cliente" value="1">
                                    <label class="form-check-label" for="inlineCheckbox2">IVA ESTADIAS</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="iva_lavado_cliente" value="1">
                                    <label class="form-check-label" for="inlineCheckbox2">IVA LAVADO</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="iva_flete_cliente" value="1">
                                    <label class="form-check-label" for="inlineCheckbox2">IVA FLETE LOCAL</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="ret_flete_cliente" value="1">
                                    <label class="form-check-label" for="inlineCheckbox2">RETENCIÓN FLETE LOCAL</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="iva_demoras_cliente" value="1">
                                    <label class="form-check-label" for="inlineCheckbox2">IVA DEMORAS</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="iva_maniobras_cliente" value="1">
                                    <label class="form-check-label" for="inlineCheckbox2">IVA MANIOBRAS</label>
                                </div>
                        </div>
                    </div>
                    <hr>
                    <h2>Cobros de Proveedor</h2>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">COSTO PROVEEDOR</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">ESTADIAS</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">LAVADO</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">FLETE LOCAL</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">DEMORAS</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">MANIOBRAS</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">OTROS</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">COMISIÓN</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">NOMBRE COMISIÓN</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">NO. FACTURA PROVEEDOR</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>             
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-4">
                                <label for="inputEmail4">OBLIGACIONES FISCALES</label> <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="iva_costo_proveedor" value="1">
                                    <label class="form-check-label" for="inlineCheckbox1">IVA COSTO PROVEEDOR</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="ret_costo_proveedor" value="1">
                                    <label class="form-check-label" for="inlineCheckbox2">RETENCIÓN COSTO PROVEEDOR</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="iva_esta_proveedor" value="1">
                                    <label class="form-check-label" for="inlineCheckbox2">IVA ESTADIAS</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="iva_lavado_proveedor" value="1">
                                    <label class="form-check-label" for="inlineCheckbox2">IVA LAVADO</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="iva_flete_proveedor" value="1">
                                    <label class="form-check-label" for="inlineCheckbox2">IVA FLETE LOCAL</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="ret_flete_proveedor" value="1">
                                    <label class="form-check-label" for="inlineCheckbox2">RETENCIÓN FLETE LOCAL</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="iva_demoras_proveedor" value="1">
                                    <label class="form-check-label" for="inlineCheckbox2">IVA DEMORAS</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="iva_maniobras_proveedor" value="1">
                                    <label class="form-check-label" for="inlineCheckbox2">IVA MANIOBRAS</label>
                                </div>
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