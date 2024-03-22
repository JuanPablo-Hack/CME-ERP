<div class="modal fade" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="role=" alert"true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">
                    Agregar Mantenimientos
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
                <form id="formMantenimientos">

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputState">Unidad
                            </label>
                            <select id="inputState" class="form-control" name="datos[]">
                            <option selected>Selecciona una opción</option>
                            <?php foreach (
                                ObtenerUnidadesPropias()
                                as $row
                            ) { ?>
                                <option value="<?php echo $row[
                                    'id'
                                ]; ?>"><?php echo $row['placa']; ?></option>
                            <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Taller</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">No. Factura</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Descripción</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Fecha</label>
                            <input type="date" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">KM</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Operador
                            </label>
                            <select id="inputState" class="form-control" name="datos[]">
                            <option selected>Selecciona una opción</option>
                            <?php foreach (
                                ObtenerOperadoresPropios()
                                as $row
                            ) { ?>
                                <option value="<?php echo $row[
                                    'id'
                                ]; ?>"><?php echo $row['nombre']; ?></option>
                            <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Proximo Mantenimiento</label>
                            <input type="date" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Autoriza</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Importe</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                    </div>
                    <div class="servicios_seleccionados">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">
                            Cerrar
                        </button>
                        <button type="submit" class="btn mb-2 btn-primary">
                            Agregar Mantenimientos
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>