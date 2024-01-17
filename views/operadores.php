<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Lista de operadores</h2>
            <br>
            <button type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#varyModal"
                data-whatever="@mdo">
                Agregar operadores
            </button>
            <?php
            include '../controllers/Selects.php';
            include '../modals/operadores/agregar.php';
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
                                        <th>NOMBRE</th>
                                        <th>RFC</th>
                                        <th>CURP</th>
                                        <th>LICENCIA</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach (
                                        ObtenerOperadores()
                                        as $row
                                    ) { ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['tipo'] > 1
                                            ? 'Externa'
                                            : 'Propia'; ?></td>
                                        <td><?php echo $row['id_proveedor'] < 1
                                            ? 'CME LOGISTICS'
                                            : ObtenerProveedor(
                                                $row['id_proveedor']
                                            ); ?></td>
                                        <td><?php echo $row['nombre']; ?></td>
                                        <td><?php echo $row['rfc']; ?></td>
                                        <td><?php echo $row['curp']; ?></td>
                                        <td><?php echo $row['licencia']; ?></td>
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
                                                <button class="dropdown-item"
                                                    onclick="eliminarUnidad(<?php echo $row[
                                                        'id'
                                                    ]; ?>)">Eliminar</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php include '../modals/operadores/editar.php'; ?>
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