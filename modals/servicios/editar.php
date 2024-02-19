<div class="modal fade" id="editarServicio<?php echo $row[
    'id'
]; ?>" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="role=" alert"true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">
                    Editar Servicios
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="alert alert-success" role="alert" style="display: none;" id="success_editar">Felicidades tu
                    registro a sido actualizado con éxito! </div>
                <div class="alert alert-danger" role="alert" style="display: none;" id="wrong_editar"> Oops hemos tenido un
                    error en la base de datos, revisa que la información sea la correcta! </div>
            <form action="../controllers/Servicios.php" method="post">

                    <input type="hidden" name="id" value="<?php echo $row[
                        'id'
                    ]; ?>">
                    <input type="hidden" name="accion" value="editar">
                    <div class="form-row">
                    <div class="form-group col-md-6">
                            <label for="inputEmail4">SUBCLIENTE</label>
                            <select id="inputState" class="form-control" name="datos[]">
                            <option value="<?php echo $row[
                                'subcliente'
                            ]; ?>" selected>Selecciona una opción</option>
                            <?php foreach (
                                ObtenerSubClientes()
                                as $subclientes
                            ) { ?>
                                <option value="<?php echo $subclientes[
                                    'id'
                                ]; ?>"><?php echo $subclientes[
    'nombre'
]; ?></option>
                            <?php } ?>
                            </select>
                        </div>

</div>
<div class="form-row">
<div class="form-group col-md-4">
        <label for="inputEmail4">ORIGEN</label>
        <input type="text" class="form-control" name="datos[]"  value="<?php echo $row[
            'origen'
        ]; ?>">
    </div>
    <div class="form-group col-md-4">
        <label for="inputEmail4">DESTINO</label>
        <input type="text" class="form-control" name="datos[]" value="<?php echo $row[
            'destino'
        ]; ?>">
    </div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
                            <label for="inputEmail4">PROVEEDOR</label>
                            <select class="form-control" name="datos[]">
                            <option selected   value="<?php echo $row[
                                'proveedor'
                            ]; ?>" >Selecciona una opción</option>
                            <option value="0">Servicio propio</option>
                            <?php foreach (
                                ObtenerProveedores()
                                as $proveedores
                            ) { ?>
                                <option value="<?php echo $proveedores[
                                    'id'
                                ]; ?>"><?php echo $proveedores[
    'razon_social'
]; ?></option>
                            <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">CLIENTE</label>
                            <select id="inputState" class="form-control" name="datos[]">
                            <option value="<?php echo $row[
                                'cliente'
                            ]; ?>" selected>Selecciona una opción</option>
                            <?php foreach (ObtenerClientes() as $clientes) { ?>
                                <option value="<?php echo $clientes[
                                    'id'
                                ]; ?>"><?php echo $clientes[
    'razon_social'
]; ?></option>
                            <?php } ?>
                            </select>
                        </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="inputEmail4">DESPACHO</label>
        <input type="date" class="form-control" name="datos[]"  value="<?php echo $row[
            'posicionamiento'
        ]; ?>">
    </div>
    <div class="form-group col-md-4">
        <label for="inputEmail4">ENTREGA</label>
        <input type="date" class="form-control" name="datos[]" value="<?php echo $row[
            'pedimente'
        ]; ?>">
    </div>
    <div class="form-group col-md-4">
        <label for="inputEmail4">VACIÓ</label>
        <input type="date" class="form-control" name="datos[]" value="<?php echo $row[
            'recinto'
        ]; ?>">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-3">
        <label for="inputEmail4">MERCANCIA</label>
        <input type="text" class="form-control" name="datos[]" value="<?php echo $row[
            'mercancia'
        ]; ?>">
    </div>
    <div class="form-group col-md-3">
        <label for="inputEmail4">DICE CONTENER</label>
        <input type="text" class="form-control" name="datos[]" value="<?php echo $row[
            'contenido'
        ]; ?>">
    </div>
    <div class="form-group col-md-3">
        <label for="inputEmail4">CLASE IMO</label>
        <input type="text" class="form-control" name="datos[]" value="<?php echo $row[
            'imo'
        ]; ?>">
    </div>
    <div class="form-group col-md-3">
        <label for="inputEmail4">CLASIFICACIÓN</label>
        <input type="text" class="form-control" name="datos[]" value="<?php echo $row[
            'clasi'
        ]; ?>">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-5">
        <label for="inputZip">CONTENEDOR (ES)</label>
        <input type="text" class="form-control" name="datos[]" id="inputZip" value="<?php echo $row[
            'no_contenedores'
        ]; ?>">
    </div>
    <div class="form-group col-mdp-6">
        <label for="inputCity">TIPO DE CONTENEDORES</label>
        <textarea class="form-control" id="example-textarea" rows="3" name="datos[]" spellcheck="false"><?php echo $row[
            'tipo_contenedor'
        ]; ?></textarea>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-mdp-6">
        <label for="inputCity">PESO NETO</label>
        <input type="text" class="form-control" name="datos[]" value="<?php echo $row[
            'peso_neto'
        ]; ?>">
    </div>
    <div class="form-group col-mdp-6">
        <label for="inputCity">PESO BRUTO</label>
        <input type="text" class="form-control" name="datos[]" value="<?php echo $row[
            'peso_bruto'
        ]; ?>">
    </div>
</div>
<div class="form-row">
                        <div class="form-group col-mdp-4">
                            <label for="inputCity">OPERADOR</label>
                            <select class="form-control" name="datos[]" >
                            <option selected value="<?php echo $row[
                                'operador'
                            ]; ?>" >Selecciona una opción</option>
                            <?php foreach (
                                ObtenerOperadores()
                                as $operadores
                            ) { ?>
                                <option value="<?php echo $operadores[
                                    'id'
                                ]; ?>"><?php echo $operadores[
    'nombre'
]; ?></option>
                            <?php } ?>
                            
                            </select>
                        </div>
                        <div class="form-group col-mdp-4">
                            <label for="inputCity">UNIDADES</label>
                            <select class="form-control" name="datos[]">
                            <option selected value="<?php echo $row[
                                'placas'
                            ]; ?>" >Selecciona una opción</option>
                            <?php foreach (
                                ObtenerUnidades()
                                as $operadores
                            ) { ?>
                                <option value="<?php echo $operadores[
                                    'id'
                                ]; ?>"><?php echo $operadores[
    'placa'
]; ?></option>
                            <?php } ?>
                            </select>
                        </div>
</div>
<div class="form-row">
    <div class="form-group col-mdp-6">
        <label for="inputCity">EJECUTIVO</label>
        <input type="text" class="form-control" name="datos[]" value="<?php echo $row[
            'ejecutivo'
        ]; ?>">
    </div>
    <div class="form-group col-mdp-6">
        <label for="inputCity">HORA</label>
        <input type="text" class="form-control" name="datos[]" value="<?php echo $row[
            'hora'
        ]; ?>">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-mdp-6">
        <label for="inputCity">RECINTO</label>
        <input type="text" class="form-control" name="datos[]" value="<?php echo $row[
            'recinto_test'
        ]; ?>">
    </div>
</div>
<div class="form-group mb-3">
    <label for="example-textarea">Observaciones</label>
    <textarea class="form-control" id="example-textarea" name="datos[]" rows="4" spellcheck="false"><?php echo $row[
        'obser'
    ]; ?></textarea>
  </div>
<div class="modal-footer">
    <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">
        Cerrar
    </button>
    <button type="submit" class="btn mb-2 btn-primary">
        Editar servicio
    </button>
</div>
</form>
            </div>

        </div>
    </div>
</div>