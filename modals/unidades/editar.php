<div class="modal fade" id="editarUnidad<?php echo $row['id']  ?>" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="role=" alert"true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">
                    Editar Unidad
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../controllers/Unidades.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                    <input type="hidden" name="accion" value="editar">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="custom-select">PROVEEDOR</label>
                            <select class="custom-select" name="datos[]">
                                <option selected value="<?php echo $row['tipo']  ?>">-Selecciona una opción-
                                </option>
                                <option value="0">Operador Propio</option>
                                <?php foreach (ObtenerProveedores() as $row2) { ?>
                                    <option value="<?php echo $row2['id']; ?>"><?php echo $row2['razon_social']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputPassword4">PERMISO SCT</label>
                            <input type="text" class="form-control" name="datos[]" value="<?php echo $row['permiso']  ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">NÚMERO DE PERMISO SCT</label>
                            <input type="text" class="form-control" name="datos[]" value="<?php echo $row['numero_sct']  ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">PLACA DEL VEHICULO</label>
                            <input type="text" class="form-control" name="datos[]" value="<?php echo $row['placa']  ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">AÑO DEL MODELO DEL VEHICULO</label>
                            <input type="text" class="form-control" name="datos[]" value="<?php echo $row['ano']  ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">PESO BRUTO VEHICULAR</label>
                            <input type="text" class="form-control" name="datos[]" value="<?php echo $row['peso']  ?>">
                        </div>
                    </div>
                    <div class="form-row">

                        <div class="form-group col-mdp-6">
                            <label for="inputCity">CONFIGURACIÓN VEHICULAR</label>
                            <input type="text" class="form-control" name="datos[]" value="<?php echo $row['config']  ?>">
                        </div>
                        <div class="form-group col-mdp-6">
                            <label for="inputCity">PLACAS DEL CONTENEDOR</label>
                            <input type="text" class="form-control" name="datos[]" value="<?php echo $row['placas_conte']  ?>">
                        </div>
                        <div class="form-group col-mdp-6">
                            <label for="inputCity">NOMBRE DE LA ASEGURADORA DE RESPONSABILIDAD CIVIL</label>
                            <input type="text" class="form-control" name="datos[]" value="<?php echo $row['nombre_ase']  ?>">
                        </div>
                        <div class="form-group col-mdp-6">
                            <label for="inputCity">NO. DE POLIZA DE SEGURO POR RESPONSABILIDAD CIVIL</label>
                            <input type="text" class="form-control" name="datos[]" value="<?php echo $row['no_poliza']  ?>">
                        </div>
                        <div class="form-group col-mdp-6">
                            <label for="inputCity">ASEGURADORA DE DAÑOS AL MEDIO AMBIENTE</label>
                            <input type="text" class="form-control" name="datos[]" value="<?php echo $row['asegu_da']  ?>">
                        </div>
                        <div class="form-group col-mdp-6">
                            <label for="inputCity">NO. DE POLIZA DE SEGURO POR DAÑOS AL MEDIO AMBIENTE</label>
                            <input type="text" class="form-control" name="datos[]" value="<?php echo $row['no_poliza_da']  ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">
                            Cerrar
                        </button>
                        <button type="submit" class="btn mb-2 btn-primary">
                            Editar Unidad
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>