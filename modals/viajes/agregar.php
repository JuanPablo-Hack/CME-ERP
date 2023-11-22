<div class="modal fade" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="role=" alert"true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">
                    Agregar viajes
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
                <form id="formViajeAgregar">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputState">REF. SERVICIO
                            </label>
                            <select id="inputState" class="form-control" name="datos[]">
                            <option selected>Selecciona una opción</option>
                            <?php foreach (obtenerServicios() as $row) { ?>
                                <option value="<?php echo $row[
                                    'id'
                                ]; ?>"><?php echo 'CME-' .
    $row['id']; ?></option>
                            <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">UNIDAD ASIGNADA
                                </label>
                                <select id="inputState" class="form-control" name="datos[]">
                            <option selected>Selecciona una opción</option>
                            <?php foreach (ObtenerUnidades() as $row) { ?>
                                <option value="<?php echo $row[
                                    'id'
                                ]; ?>"><?php echo $row[
    'modelo'
]; ?></option>
                            <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">DIESEL</label>
                            <input type="number" step="any" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">INGRESO PUERTO</label>
                            <input type="number" step="any" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">MANIOBRAS</label>
                            <input type="number" step="any" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">PISTAS</label>
                            <input type="number" step="any" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">OPERADOR</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">OTROS</label>
                            <input type="number" step="any" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">COMIDAS</label>
                            <input type="number" step="any" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">COMISIÓN</label>
                            <input type="number" step="any" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">OBSERVACIONES</label>
                            <textarea class="form-control" id="example-textarea" rows="4" spellcheck="false" name="datos[]"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">
                            Cerrar
                        </button>
                        <button type="submit" class="btn mb-2 btn-primary">
                            Agregar viaje
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>