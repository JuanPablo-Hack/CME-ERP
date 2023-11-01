<div class="modal fade" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="role=" alert"true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">
                    Agregar Cotización
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
                <form id="formCotizacionAgregar">
                <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Origen</label>
                            <input type="text" class="form-control" name="datos[]" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Destino</label>
                            <input type="text" class="form-control" name="datos[]" >
                        </div>
                       
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="datos[]" id="customCheck1" wfd-id="id16">
                        <label class="custom-control-label" for="customCheck1">Póliza de seguro</label>
                    </div>
                    <br>
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
                            <label for="inputEmail4">Cantidad de servicios</label>
                            <select class="form-control" name="datos[]" onchange="cambiar_conceptos()"  id="num_conceptos">
                                <option selected disabled>Selecciona una opción...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </div>
                    <div id="conceptos">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">
                            Cerrar
                        </button>
                        <button type="submit" class="btn mb-2 btn-primary">
                            Agregar Cotización
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>