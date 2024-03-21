<div class="modal fade" id="detallesCobros<?php echo $row[
    'id'
]; ?>" tabindex="-1" role="dialog"
    aria-labelledby="varyModalLabel" aria-hidden="role=" alert"true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">
                   Detalles de cobros
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
            $array_clientes = explode(',', $row['arreglo_clientes']);
            $array_proveedores = explode(',', $row['arreglo_proveedores']);
            ?>
            <div class="modal-body">
                <form id="formCobros">
                    <h2>Cobros de Cliente</h2>
                    <div class="form-row">
                    <?php for ($i = 0; $i < count($array_clientes); $i++) { ?>
                        <div class="form-group col-md-3">
                                <input type="text" class="form-control" name="cliente_cobros[]" value="<?php echo $array_clientes[
                                    $i
                                ]; ?>">
                        </div>
                    <?php } ?>
                    </div>
                    <hr>
                    <h2>Cobros de Proveedor</h2>
                    <div class="form-row">
                    <?php for (
                        $i = 0;
                        $i < count($array_proveedores);
                        $i++
                    ) { ?>
                        <div class="form-group col-md-3">
                                <input type="text" class="form-control" name="cliente_cobros[]" value="<?php echo $array_proveedores[
                                    $i
                                ]; ?>">
                        </div>
                    <?php } ?>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">OBSERVACIONES</label>
                            <textarea class="form-control" id="example-textarea" rows="4" spellcheck="false"
                                name="datos[]" readonly ><?php echo $row[
                                    'observaciones'
                                ]; ?></textarea>
                        </div>
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