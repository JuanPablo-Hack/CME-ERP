<div class="modal fade" id="editarUnidad<?php echo $row['id']  ?>" tabindex="-1" role="dialog"
    aria-labelledby="varyModalLabel" aria-hidden="role=" alert"true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">
                    Editar Unidad
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">

                        <div class="form-group col-md-12">
                            <label for="inputPassword4">Modelo</label>
                            <input type="text" class="form-control" name="datos[]" value="<?php echo $row['modelo']  ?>"
                                id="inputPassword4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Año</label>
                            <input type="text" class="form-control" name="datos[]" value="<?php echo $row['ano']  ?>"
                                id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Color</label>
                            <input type="text" class="form-control" name="datos[]" value="<?php echo $row['color']  ?>"
                                id="inputEmail4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Placas</label>
                            <input type="text" class="form-control" name="datos[]" value="<?php echo $row['placas']  ?>"
                                id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">No. Economico</label>
                            <input type="text" class="form-control" name="datos[]"
                                value="<?php echo $row['noeconomico']  ?>" id="inputEmail4">
                        </div>
                    </div>
                    <div class="form-row">

                        <div class="form-group col-mdp-6">
                            <label for="inputCity">Capacidad</label>
                            <input type="text" class="form-control" name="datos[]"
                                value="<?php echo $row['capacidad']  ?>" id="inputCity">
                        </div>
                        <div class="form-group col-mdp-6">
                            <label for="inputState">Tipo de Combustible
                            </label>
                            <select id="inputState" class="form-control" name="datos[]"
                                value="<?php echo $row['tipocombustible']  ?>">
                                <option selected disabled><?php echo $row['tipocombustible']  ?></option>
                                <option value="Gasolina">Gasolina</option>
                                <option value="Diesel">Diesel</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Serie</label>
                            <input type="text" class="form-control" name="datos[]" value="<?php echo $row['serie']  ?>"
                                id="inputEmail4">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">
                            Cerrar
                        </button>
                        <button type="submit" class="btn mb-2 btn-primary">
                            Editar Unidad
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>