<div class="modal fade" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="role=" alert"true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">
                    Agregar Operador
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
                <form id="formOperadorAgregar">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="custom-select">PROVEEDOR</label>
                            <select class="custom-select" name="datos[]">
                                <option selected>-Selecciona una opción-
                                </option>
                                <option value="0">Operador Propio</option>
                                <?php foreach (ObtenerProveedores() as $row2) { ?>
                                    <option value="<?php echo $row2['id']; ?>"><?php echo $row2['razon_social']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">NOMBRE</label>
                            <input type="text" class="form-control" name="datos[]">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">R.F.C.</label>
                            <input type="text" class="form-control" name="datos[]">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">CURP</label>
                            <input type="text" class="form-control" name="datos[]">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">NO. DE LICENCIA</label>
                            <input type="text" class="form-control" name="datos[]">
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">
                            Cerrar
                        </button>
                        <button type="submit" class="btn mb-2 btn-primary">
                            Agregar Operador
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>