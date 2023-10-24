<div class="modal fade" id="detalleCliente<?php echo $row[
    'id'
]; ?>" tabindex="-1" role="dialog"
    aria-labelledby="varyModalLabel" aria-hidden="role=" alert"true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">
                    Detalles Cliente
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../controllers/Clientes.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row[
                        'id'
                    ]; ?>">
                    
                    <div class="form-group">
                        <label for="inputAddress">Dirección</label>
                        <input type="text" class="form-control" readonly value="<?php echo $row[
                            'dir'
                        ]; ?>"
                            id="inputAddress">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="inputZip">C.P.</label>
                            <input type="text" class="form-control" readonly value="<?php echo $row[
                                'cp'
                            ]; ?>"
                                id="inputZip">
                        </div>
                        <div class="form-group col-mdp-6">
                            <label for="inputCity">E-Mail</label>
                            <input type="email" class="form-control" readonly value="<?php echo $row[
                                'email'
                            ]; ?>"
                                id="inputCity">
                        </div>
                        <div class="form-group col-mdp-6">
                            <label for="inputCity">Télefono</label>
                            <input type="tel" class="form-control" readonly
                                value="<?php echo $row[
                                    'telefono'
                                ]; ?>" id="inputCity">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nombre representante</label>
                            <input type="text" class="form-control" readonly  value="<?php echo $row[
                                'nombre_representante'
                            ]; ?>" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Subcliente</label>
                            <input type="text" class="form-control" readonly  value="<?php echo $row[
                                'subcliente'
                            ]; ?>" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Correo secundario</label>
                            <input type="text" class="form-control" readonly  value="<?php echo $row[
                                'correo_secu'
                            ]; ?>" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Operativo</label>
                            <input type="text" class="form-control" readonly  value="<?php echo $row[
                                'operativo'
                            ]; ?>" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Liga de datos</label>
                        <input type="text" class="form-control" readonly id="inputAddress"  value="<?php echo $row[
                            'liga_datos'
                        ]; ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">
                            Cerrar
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>