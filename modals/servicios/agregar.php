<div class="modal fade" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="role=" alert"true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">
                    Agregar servicios
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
                <form id="formAgregarServicio">

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">ORIGEN</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">DESTINO</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">CONTENEDOR / CARGA SUELTA</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">CLIENTE</label>
                            <select id="inputState" class="form-control" name="datos[]">
                            <option selected>Selecciona una opción</option>
                            <?php foreach (ObtenerClientes() as $row) { ?>
                                <option value="<?php echo $row[
                                    'id'
                                ]; ?>"><?php echo $row[
    'razon_social'
]; ?></option>
                            <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputZip">ASIGNADO A</label>
                            <select id="inputState" class="form-control" name="datos[]">
                            <option selected>Selecciona una opción</option>
                            <?php foreach (ObtenerUsuarios() as $row) { ?>
                                <option value="<?php echo $row[
                                    'id'
                                ]; ?>"><?php echo $row[
    'nombre'
]; ?></option>
                            <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity">UNIDAD/OPERADOR</label>
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
                        <div class="form-group col-mdp-4">
                            <label for="inputCity">TERMINAL</label>
                            <input type="text" class="form-control" name="datos[]" id="inputCity">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputZip">HORA</label>
                            <input type="text" class="form-control" name="datos[]" id="inputZip">
                        </div>
                        <div class="form-group col-mdp-3">
                            <label for="inputCity">DESPACHO</label>
                            <input type="text" class="form-control" name="datos[]" id="inputCity">
                        </div>
                        <div class="form-group col-mdp-3">
                            <label for="inputCity">ENTREGA</label>
                            <input type="text" class="form-control" name="datos[]" id="inputCity">
                        </div>
                        <div class="form-group col-mdp-3">
                            <label for="inputCity">VACIO</label>
                            <input type="text" class="form-control" name="datos[]" id="inputCity">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">
                            Cerrar
                        </button>
                        <button type="submit" class="btn mb-2 btn-primary">
                            Agregar servicio
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>