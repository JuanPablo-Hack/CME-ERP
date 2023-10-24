<div class="modal fade" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="role="
    alert"true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">
                    Agregar Clientes
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
                <form id="formClienteAgregar">
                    <div class="form-row">

                        <div class="form-group col-md-12">
                            <label for="inputPassword4">Razón Social</label>
                            <input type="text" class="form-control" name="datos[]" id="inputPassword4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">RFC</label>
                            <input type="text" class="form-control" name="datos[]" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Situación
                                Fiscal
                            </label>
                            <select id="inputState" class="form-control" name="datos[]">
                                <option selected disabled>Selecciona una opción...</option>
                                <option value="Física">Persona Física</option>
                                <option value="Moral">Persona Moral</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Dirección</label>
                        <input type="text" class="form-control" name="datos[]" id="inputAddress">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="inputZip">C.P.</label>
                            <input type="text" class="form-control" name="datos[]" id="inputZip">
                        </div>
                        <div class="form-group col-mdp-6">
                            <label for="inputCity">E-Mail</label>
                            <input type="email" class="form-control" name="datos[]" id="inputCity">
                        </div>
                        <div class="form-group col-mdp-6">
                            <label for="inputCity">Télefono</label>
                            <input type="tel" class="form-control" name="datos[]" id="inputCity">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nombre representante</label>
                            <input type="text" class="form-control" name="datos[]" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Subcliente</label>
                            <input type="text" class="form-control" name="datos[]" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Correo secundario</label>
                            <input type="text" class="form-control" name="datos[]" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Operativo</label>
                            <input type="text" class="form-control" name="datos[]" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Liga de datos</label>
                        <input type="text" class="form-control" name="datos[]" id="inputAddress">
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