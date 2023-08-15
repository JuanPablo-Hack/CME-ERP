<div class="modal fade" id="editarCliente<?php echo $row['id']  ?>" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="role=" alert"true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">
                    Editar Cliente
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../controllers/Clientes.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                    <input type="hidden" name="accion" value="editar">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputPassword4">Razón Social</label>
                            <input type="text" class="form-control" name="datos[]" value="<?php echo $row['razon_social']  ?>" id="inputPassword4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">RFC</label>
                            <input type="text" class="form-control" name="datos[]" value="<?php echo $row['rfc']  ?>" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Situación
                                Fiscal
                            </label>
                            <select id="inputState" class="form-control" name="datos[]">
                                <option selected disabled value="<?php echo $row['situacion_fiscal']  ?>">
                                    Persona <?php echo $row['situacion_fiscal']  ?></option>
                                <option value="Física">Persona Física</option>
                                <option value="Moral">Persona Moral</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Dirección</label>
                        <input type="text" class="form-control" name="datos[]" value="<?php echo $row['dir']  ?>" id="inputAddress">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="inputZip">C.P.</label>
                            <input type="text" class="form-control" name="datos[]" value="<?php echo $row['cp']  ?>" id="inputZip">
                        </div>
                        <div class="form-group col-mdp-6">
                            <label for="inputCity">E-Mail</label>
                            <input type="email" class="form-control" name="datos[]" value="<?php echo $row['email']  ?>" id="inputCity">
                        </div>
                        <div class="form-group col-mdp-6">
                            <label for="inputCity">Télefono</label>
                            <input type="tel" class="form-control" name="datos[]" value="<?php echo $row['telefono']  ?>" id="inputCity">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Nombre representante</label>
                            <input type="text" class="form-control" name="datos[]" value="<?php echo $row['nombre_representante']  ?>" id="inputEmail4" placeholder="Email">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">
                            Cerrar
                        </button>
                        <button type="submit" class="btn mb-2 btn-primary">
                            Editar Cliente
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>