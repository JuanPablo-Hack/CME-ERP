<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Lista de Unidades</h2>
            <br>
            <button type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#varyModal"
                data-whatever="@mdo">
                Agregar Unidades
            </button>
            <?php
            include '../controllers/Selects.php';
            include '../modals/unidades/agregar.php';
            ?>
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table datatables" id="dataTable-1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>TIPO</th>
                                        <th>PROVEEDOR</th>
                                        <th>PERMISO SCT</th>
                                        <th>NUMERO SCT</th>
                                        <th>PLACAS</th>
                                        <th>AÑO</th>
                                        <th>PESO BRUTO</th>
                                        <th>CONFIGURACIÓN</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach (
                                        ObtenerUnidades()
                                        as $row
                                    ) { ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['tipo']; ?></td>
                                        <td><?php echo $row['id_proveedor'] < 1
                                            ? 'CME LOGISTICS'
                                            : ObtenerProveedor(
                                                $row['id_proveedor']
                                            ); ?></td>
                                        <td><?php echo $row['permiso']; ?></td>
                                        <td><?php echo $row['numero_sct']; ?></td>
                                        <td><?php echo $row[
                                            'placa'
                                        ]; ?></td>
                                        <td><?php echo $row[
                                            'ano'
                                        ]; ?></td>
                                        <td><?php echo $row[
                                            'peso'
                                        ]; ?></td>
                                        <td><?php echo $row['config']; ?></td>
                                        <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <button class="dropdown-item" type="button"
                                                    class="btn mb-2 btn-outline-secondary" data-toggle="modal"
                                                    data-target="#editarUnidad<?php echo $row[
                                                        'id'
                                                    ]; ?>">Editar</button>
                                                <button class="dropdown-item" onclick="eliminarUnidad(<?php echo $row[
                                                        'id'
                                                    ]; ?>)">Eliminar</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php include '../modals/unidades/editar.php'; ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>