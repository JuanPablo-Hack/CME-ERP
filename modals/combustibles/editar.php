<div class="modal fade" id="#editarCombustible<?php echo $row['id']  ?>" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="role="
    alert"true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">
                    Agregar Combustible
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
                    <form id="formCombustible">
                    <div class="form-row">
                    <div class="form-group col-md-4">
                            <label for="inputState">REF. Viaje
                            </label>
                            <select id="inputState" class="form-control" name="datos[]">
                            <option selected>Selecciona una opción</option>
                            <?php foreach (obtenerViajes() as $viajes) { ?>
                                <option value="<?php echo $viajes[
                                    'id'
                                ]; ?>"><?php echo 'CME-' .
    $viajes['id']; ?></option>
                            <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Km Inicial</label>
                            <input type="number"  min="0" class="form-control" name="datos[]" value="<?php echo $row[
                                'kminicial'
                            ]; ?>" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Km Final</label>
                            <input type="number"  min="0" class="form-control" name="datos[]" value="<?php echo $row[
                                'kmfinal'
                            ]; ?>">
                        </div>
                    </div>
                   
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="inputZip">Litros</label>
                            <input type="number"  min="0" class="form-control" name="datos[]" value="<?php echo $row[
                                'litros'
                            ]; ?>" id="inputZip">
                        </div>
                        <div class="form-group col-mdp-6">
                            <label for="inputCity">Factura</label>
                            <input type="text" class="form-control" name="datos[]" value="<?php echo $row[
                                'factura'
                            ]; ?>" id="inputCity">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Importe</label>
                            <input type="text" class="form-control" name="datos[]" value="<?php echo $row[
                                'importe'
                            ]; ?>" id="inputEmail4" >
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">
                            Cerrar
                        </button>
                        <button type="submit" class="btn mb-2 btn-primary">
                            Agregar Combustible
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>