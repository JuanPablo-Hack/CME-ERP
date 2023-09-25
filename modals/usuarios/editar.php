<div class="modal fade" id="editarUsuario<?php echo $row['id']  ?>" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="role="
    alert"true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">
                    Editar trabajador
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../controllers/Usuarios.php" method="post">
                    <input type="hidden" name="accion" value="editar">
                    <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputPassword4">Nombre</label>
                            <input type="text" class="form-control" name="datos[]" id="inputPassword4" value="<?php echo $row['nombre']  ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-mdp-6">
                            <label for="inputCity">E-Mail</label>
                            <input type="email" class="form-control" name="datos[]" id="inputCity" value="<?php echo $row['correo']  ?>">
                        </div>
                        <div class="form-group col-mdp-6">
                            <label for="inputCity">Télefono</label>
                            <input type="tel" class="form-control" name="datos[]" id="inputCity" value="<?php echo $row['tel']  ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Cargo</label>
                        <input type="text" class="form-control" name="datos[]" id="inputAddress" value="<?php echo $row['cargo']  ?>">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputState">Rol
                            </label>
                            <select id="inputState" class="form-control" name="datos[]">
                                <option selected value="<?php echo $row['rol']  ?>">Selecciona una opción...</option>
                                <option value="1">Administrador</option>
                                <option value="2">Comercial</option>
                                <option value="3">Operativo</option>
                                <option value="4">Contabilidad</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">
                            Cerrar
                        </button>
                        <button type="submit" class="btn mb-2 btn-primary">
                            Editar trabajador
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>