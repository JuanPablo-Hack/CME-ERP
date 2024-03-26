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
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">ORIGEN</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">DESTINO</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputZip">PROVEEDOR</label>
                            <select class="form-control" name="datos[]" id="proveedor" onchange="operadores()">
                                <option selected>Selecciona una opción</option>
                                <option value="0">Servicio Propio</option>
                                <?php foreach (
                                    ObtenerProveedores()
                                    as $row
                                ) { ?>
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
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">SUBCLIENTE</label>
                            <select id="inputState" class="form-control" name="datos[]">
                                <option selected>Selecciona una opción</option>
                                <?php foreach (
                                    ObtenerSubClientes()
                                    as $row
                                ) { ?>
                                    <option value="<?php echo $row[
                                        'id'
                                    ]; ?>"><?php echo $row[
    'nombre'
]; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">DESPACHO</label>
                            <input type="date" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">ENTREGA</label>
                            <input type="date" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">VACIÓ</label>
                            <input type="date" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">MERCANCIA</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">DICE CONTENER</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">CLASE IMO</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">CLASIFICACIÓN</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="inputZip">NO.CONTENEDOR (ES)</label>
                            <input type="text" class="form-control" name="datos[]" min="1" id="inputZip">
                        </div>
                        <div class="form-group col-mdp-6">
                            <label for="inputCity">TIPO DE CONTENEDORES</label>
                            <textarea class="form-control" id="example-textarea" rows="3" name="datos[]" spellcheck="false"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-mdp-6">
                            <label for="inputCity">PESO NETO</label>
                            <input type="text" class="form-control" name="datos[]" id="inputCity">
                        </div>
                        <div class="form-group col-mdp-6">
                            <label for="inputCity">PESO BRUTO</label>
                            <input type="text" class="form-control" name="datos[]" id="inputCity">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-mdp-4">
                            <label for="inputCity">OPERADOR</label>
                            <select class="form-control" name="datos[]" disabled id="lista_opera">
                                <option value="0" selected>-Selecciona un operador-</option>
                            </select>
                        </div>
                        <div class="form-group col-mdp-4">
                            <label for="inputCity">UNIDADES</label>
                            <select class="form-control" name="datos[]" disabled id="unidades">
                                <option value="0" selected>-Selecciona un operador-</option>
                            </select>
                        </div>
                        <div class="form-group col-mdp-4">
                            <label for="inputCity">EJECUTIVO</label>
                            <input type="text" class="form-control" name="datos[]" id="inputCity">
                        </div>
                        <div class="form-group col-mdp-4">
                            <label for="inputCity">HORA</label>
                            <input type="text" class="form-control" name="datos[]" id="inputCity">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-mdp-4">
                            <label for="inputCity">Recinto</label>
                            <input type="text" class="form-control" name="datos[]" id="inputCity">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">POSICIONAMIENTO</label>
                            <input type="date" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">PEDIMENTO</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="example-textarea">Observaciones</label>
                        <textarea class="form-control" id="example-textarea" name="datos[]" rows="4" spellcheck="false"></textarea>
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