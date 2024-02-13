<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Lista de Cobros</h2>
            <br>
            <button type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#varyModal"
                data-whatever="@mdo">
                Agregar Cobros
            </button>
            <?php
            include '../controllers/Selects.php';
            include '../modals/cobros/agregar.php';
            ?>
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table datatables" id="dataTable-1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Ref. Interna</th>
                                        <th>Costo Cliente</th>
                                        <th>Costo Proveedor</th>
                                        <th>Pagado Cliente</th>
                                        <th>Pagado Proveedor</th>
                                        <th>Utilidad/Perdida</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach (ObtenerCobros() as $row) { ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo 'CME-' .
                                            date('Y') .
                                            '-' .
                                            $row['ref_int']; ?></td>
                                        <td><?php echo number_format(
                                            calcularCobrosCliente(
                                                $row['costo_cliente']
                                            ),
                                            2,
                                            '.',
                                            ','
                                        ); ?>
                                        </td>
                                        <td><?php echo number_format(
                                            calcularCobrosProveedor(
                                                $row['costo_proveedor']
                                            ),
                                            2,
                                            '.',
                                            ','
                                        ); ?>
                                        </td>
                                        <td><?php echo number_format(
                                            $row['pago_cliente'],
                                            2,
                                            '.',
                                            ','
                                        ); ?></td>
                                        <td><?php echo number_format(
                                            $row['pago_proveedor'],
                                            2,
                                            '.',
                                            ','
                                        ); ?></td>
                                        <td><?php echo number_format(
                                            calcularCobrosCliente(
                                                $row['costo_cliente']
                                            ) +
                                                calcularCobrosProveedor(
                                                    $row['costo_proveedor']
                                                ),
                                            2,
                                            '.',
                                            ','
                                        ); ?>
                                        </td>
                                        <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <button class="dropdown-item" type="button"
                                                    class="btn mb-2 btn-outline-secondary" data-toggle="modal"
                                                    data-target="#detallesCobros<?php echo $row[
                                                        'id'
                                                    ]; ?>">Detalles</button>
                                                <button class="dropdown-item" type="button"
                                                    class="btn mb-2 btn-outline-secondary" data-toggle="modal"
                                                    data-target="#actualizarCobros<?php echo $row[
                                                        'id'
                                                    ]; ?>">Actualizar</button>
                                                <button class="dropdown-item" type="button"
                                                    class="btn mb-2 btn-outline-secondary" data-toggle="modal"
                                                    data-target="#editarCobros<?php echo $row[
                                                        'id'
                                                    ]; ?>">Editar</button>
                                                <button class="dropdown-item"
                                                    onclick="eliminarCliente(<?php echo $row[
                                                        'id'
                                                    ]; ?>)">Eliminar</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php include '../modals/cobros/detalles.php'; ?>
                                    <?php include '../modals/cobros/editar.php'; ?>
                                    <?php include '../modals/cobros/actualizar.php'; ?>
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