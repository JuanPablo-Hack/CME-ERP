<div class="modal fade" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="role=" alert"true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">
                    Agregar Productos
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
                <form id="formInventarioAgregar">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputPassword4">Nombre</label>
                            <input type="text" class="form-control" name="datos[]" id="inputPassword4">
                        </div>
                    </div>
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="inputState">Cliente
                            </label>
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
                            <label for="inputState">Proveedor
                            </label>
                            <select id="inputState" class="form-control" name="datos[]">
                            <option selected>Selecciona una opción</option>
                            <?php foreach (ObtenerProveedores() as $row) { ?>
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
                        <div class="form-group col-mdp-4">
                            <label for="inputCity">Peso Tara</label>
                            <input type="text" class="form-control" name="datos[]" id="inputCity">
                        </div>
                        <div class="form-group col-mdp-4">
                            <label for="inputCity">Peso Neto</label>
                            <input type="text" class="form-control" name="datos[]" id="inputCity">
                        </div>
                        <div class="form-group col-mdp-4">
                            <label for="inputCity">Peso Bruto</label>
                            <input type="text" class="form-control" name="datos[]" id="inputCity">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Descripción</label>
                            <textarea class="form-control" id="example-textarea" rows="4" spellcheck="false" name="datos[]"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">
                            Cerrar
                        </button>
                        <button type="submit" class="btn mb-2 btn-primary">
                            Agregar Producto
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>