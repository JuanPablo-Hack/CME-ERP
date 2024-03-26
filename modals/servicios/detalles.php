<div class="modal fade" id="detallesServicio<?php echo $row[
    'id'
]; ?>" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="role=" alert"true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">
                    Detalles del servicio
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form id="formAgregarServicio">

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <input type="hidden" name="accion" value="editar">
                    <div class="form-row">
    <div class="form-group col-md-4">
        <label for="inputEmail4">ORIGEN</label>
        <input type="text" class="form-control"readonly  value="<?php echo $row[
            'origen'
        ]; ?>">
    </div>
    <div class="form-group col-md-4">
        <label for="inputEmail4">DESTINO</label>
        <input type="text" class="form-control"readonly value="<?php echo $row[
            'destino'
        ]; ?>">
    </div>
    <div class="form-group col-md-4">
        <label for="inputEmail4">PROVEEDOR</label>
        <input type="text" class="form-control"readonly value="<?php echo $row[
            'proveedor'
        ] < 1
            ? 'CME LOGISTICS'
            : ObtenerProveedor($row['proveedor']); ?>">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputEmail4">CLIENTE</label>
        <input type="text" class="form-control"readonly value="<?php echo obtenerCliente(
            $row['cliente']
        ); ?>">
    </div>
    <div class="form-group col-md-6">
        <label for="inputEmail4">SUBCLIENTE</label>
        <input type="text" class="form-control"readonly value="<?php echo obtenerSubCliente(
            $row['subcliente']
        ); ?>">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="inputEmail4">DESPACHO</label>
        <input type="date" class="form-control"readonly  value="<?php echo $row[
            'posicionamiento'
        ]; ?>">
    </div>
    <div class="form-group col-md-4">
        <label for="inputEmail4">ENTREGA</label>
        <input type="text" class="form-control"readonly value="<?php echo $row[
            'pedimente'
        ]; ?>">
    </div>
    <div class="form-group col-md-4">
        <label for="inputEmail4">VACIÓ</label>
        <input type="text" class="form-control"readonly value="<?php echo $row[
            'recinto'
        ]; ?>">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-3">
        <label for="inputEmail4">MERCANCIA</label>
        <input type="text" class="form-control"readonly value="<?php echo $row[
            'mercancia'
        ]; ?>">
    </div>
    <div class="form-group col-md-3">
        <label for="inputEmail4">DICE CONTENER</label>
        <input type="text" class="form-control"readonly value="<?php echo $row[
            'contenido'
        ]; ?>">
    </div>
    <div class="form-group col-md-3">
        <label for="inputEmail4">CLASE IMO</label>
        <input type="text" class="form-control"readonly value="<?php echo $row[
            'imo'
        ]; ?>">
    </div>
    <div class="form-group col-md-3">
        <label for="inputEmail4">CLASIFICACIÓN</label>
        <input type="text" class="form-control"readonly value="<?php echo $row[
            'clasi'
        ]; ?>">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-5">
        <label for="inputZip">CONTENEDOR (ES)</label>
        <input type="text" class="form-control"readonly id="inputZip" value="<?php echo $row[
            'no_contenedores'
        ]; ?>">
    </div>
    <div class="form-group col-mdp-6">
        <label for="inputCity">TIPO DE CONTENEDORES</label>
        <textarea class="form-control" id="example-textarea" rows="3"readonly spellcheck="false"><?php echo $row[
            'tipo_contenedor'
        ]; ?></textarea>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-mdp-6">
        <label for="inputCity">PESO NETO</label>
        <input type="text" class="form-control"readonly value="<?php echo $row[
            'peso_neto'
        ]; ?>">
    </div>
    <div class="form-group col-mdp-6">
        <label for="inputCity">PESO BRUTO</label>
        <input type="text" class="form-control"readonly value="<?php echo $row[
            'peso_bruto'
        ]; ?>">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputEmail4">OPERADOR</label>
        <input type="text" class="form-control"readonly value="<?php echo obtenerOperador(
            $row['operador']
        ); ?>">
    </div>
    <div class="form-group col-md-6">
        <label for="inputEmail4">UNIDAD</label>
        <input type="text" class="form-control"readonly value="<?php echo ObtenerUnidad(
            $row['placas']
        ); ?>">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputEmail4">EJECUTIVO</label>
        <input type="text" class="form-control"readonly value="<?php echo $row[
            'ejecutivo'
        ]; ?>">
    </div>
    <div class="form-group col-md-6">
        <label for="inputEmail4">HORA</label>
        <input type="text" class="form-control"readonly value="<?php echo $row[
            'hora'
        ]; ?>">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputEmail4">RECINTO</label>
        <input type="text" class="form-control"readonly value="<?php echo $row[
            'recinto_test'
        ]; ?>">
    </div>
</div>
<div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">POSICIONAMIENTO</label>
                            <input type="date" class="form-control" name="datos[]" readonly value="<?php echo $row[
                                'POSICIONAMIENTO_FEC'
                            ]; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">PEDIMENTO</label>
                            <input type="text" class="form-control" name="datos[]" readonly value="<?php echo $row[
                                'PEDIMENTO_FEC'
                            ]; ?>">
                        </div>
                    </div>
<div class="form-group mb-3">
    <label for="example-textarea">Observaciones</label>
    <textarea class="form-control" id="example-textarea"readonly rows="4" spellcheck="false"><?php echo $row[
        'obser'
    ]; ?></textarea>
  </div>

</form>
            </div>

        </div>
    </div>
</div>