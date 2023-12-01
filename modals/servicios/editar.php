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
            <form action="../controllers/Servicios.php" method="post">

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
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
    <div class="form-group col-md-4">
        <label for="inputEmail4">POSICIONAMIENTO</label>
        <input type="date" class="form-control" name="datos[]"  value="<?php echo $row[
            'posicionamiento'
        ]; ?>">
    </div>
    <div class="form-group col-md-4">
        <label for="inputEmail4">PEDIMENTO</label>
        <input type="text" class="form-control" name="datos[]" value="<?php echo $row[
            'pedimente'
        ]; ?>">
    </div>
    <div class="form-group col-md-4">
        <label for="inputEmail4">RECINTO</label>
        <input type="text" class="form-control" name="datos[]" value="<?php echo $row[
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
        <input type="number" class="form-control" name="datos[]" id="inputZip" value="<?php echo $row[
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
    <div class="form-group col-mdp-6">
        <label for="inputCity">OPERADOR</label>
        <input type="text" class="form-control" name="datos[]" value="<?php echo $row[
            'operador'
        ]; ?>">
    </div>
    <div class="form-group col-mdp-6">
        <label for="inputCity">PLACAS</label>
        <input type="text" class="form-control" name="datos[]" value="<?php echo $row[
            'placas'
        ]; ?>">
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