<div class="form-row">
<div class="form-group col-md-6">
                            <label for="inputZip">PROVEEDOR</label>
                            <select id="inputState" class="form-control" name="datos[]">
                            <option selected>Selecciona una opción</option>
                            <?php foreach (ObtenerProveedores() as $row) { ?>
                                <option value="<?php echo $row[
                                    'id'
                                ]; ?>"><?php echo $row[
    'razon_social'
]; ?></option>
                            <?php } ?>
                            </select>
                        </div>
<div class="form-group col-md-6">
    <label for="inputPassword4">PERMISO SCT</label>
    <input type="text" class="form-control" name="datos[]" id="inputPassword4">
</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
    <label for="inputEmail4">NÚMERO DE PERMISO SCT</label>
    <input type="text" class="form-control" name="datos[]" id="inputEmail4">
</div>
<div class="form-group col-md-6">
    <label for="inputEmail4">PLACA DEL VEHICULO</label>
    <input type="text" class="form-control" name="datos[]" id="inputEmail4">
</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
    <label for="inputEmail4">AÑO DEL MODELO DEL VEHICULO</label>
    <input type="text" class="form-control" name="datos[]" id="inputEmail4">
</div>
<div class="form-group col-md-6">
    <label for="inputEmail4">PESO BRUTO VEHICULAR</label>
    <input type="text" class="form-control" name="datos[]" id="inputEmail4">
</div>
</div>
<div class="form-row">

<div class="form-group col-mdp-6">
    <label for="inputCity">CONFIGURACIÓN VEHICULAR</label>
    <input type="text" class="form-control" name="datos[]" id="inputCity">
</div>
<div class="form-group col-mdp-6">
    <label for="inputCity">NOMBRE DE LA ASEGURADORA DE RESPONSABILIDAD CIVIL</label>
    <input type="text" class="form-control" name="datos[]" id="inputCity">
</div>
<div class="form-group col-mdp-6">
    <label for="inputCity">NO. DE POLIZA DE SEGURO POR RESPONSABILIDAD CIVIL</label>
    <input type="text" class="form-control" name="datos[]" id="inputCity">
</div>
<div class="form-group col-mdp-6">
    <label for="inputCity">ASEGURADORA DE DAÑOS AL MEDIO AMBIENTE</label>
    <input type="text" class="form-control" name="datos[]" id="inputCity">
</div>
<div class="form-group col-mdp-6">
    <label for="inputCity">NO. DE POLIZA DE SEGURO POR  DAÑOS AL MEDIO AMBIENTE</label>
    <input type="text" class="form-control" name="datos[]" id="inputCity">
</div>
</div>