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
                        <div class="form-group col-md-4">
                            <label for="inputState">REF. SERVICIO
                            </label>
                            <select id="inputState" class="form-control" name="datos[]">
                                <option selected>Selecciona una opción</option>
                                <?php foreach (
                                    obtenerServiciosNoFacturados()
                                    as $row
                                ) { ?>
                                <option value="<?php echo $row[
                                    'id'
                                ]; ?>"><?php echo 'CME-' .
    $row['id']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">FACTURA CLIENTE</label>
                            <input type="text" class="form-control" name="datos[]">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">FACTURA PROVEEDOR</label>
                            <input type="text" class="form-control" name="datos[]">
                        </div>   
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">NO. CONCEPTOS CLIENTE</label>
                            <input type="text" class="form-control" name="datos[]" onblur="cambiar_conceptos()" id="num_conceptos">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">NO. CONCEPTOS PROVEEDOR</label>
                            <input type="text" class="form-control" name="datos[]" onblur="cambiar_conceptos_proveedor()" id="num_conceptos_proveedor">
                        </div>   
                    </div>
                    <div id="conceptos_cliente">

                    </div>
                    <div id="conceptos_proveedores">

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