<div class="modal fade" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="role="
    alert"true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">
                    Agregar Usuario
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
                <form id="formUsuarioAgregar">
                    <div class="form-row">

                        <div class="form-group col-md-12">
                            <label for="inputPassword4">Nombre</label>
                            <input type="text" class="form-control" name="datos[]" id="inputPassword4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-mdp-6">
                            <label for="inputCity">E-Mail</label>
                            <input type="email" class="form-control" name="datos[]" id="inputCity">
                        </div>
                        <div class="form-group col-mdp-6">
                            <label for="inputCity">Télefono</label>
                            <input type="tel" class="form-control" name="datos[]" id="inputCity">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Cargo</label>
                        <input type="text" class="form-control" name="datos[]" id="inputAddress">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputState">Rol
                            </label>
                            <select id="inputState" class="form-control" name="datos[]">
                                <option selected disabled>Selecciona una opción...</option>
                                <option value="1">Administrador</option>
                                <option value="2">Comercial</option>
                                <option value="3">Operativo</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">
                            Cerrar
                        </button>
                        <button type="submit" class="btn mb-2 btn-primary">
                            Agregar Cliente
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>