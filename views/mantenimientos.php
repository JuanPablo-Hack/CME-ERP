<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Lista de Mantenimientos</h2>
            <br>
            <button type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#varyModal" data-whatever="@mdo">
                Agregar Mantenimiento
            </button>
            <?php
            include '../controllers/Selects.php';
            include '../modals/mantenimientos/agregar.php';
            ?>
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table datatables" id="dataTable-1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Unidad</th>
                                        <th>Taller</th>
                                        <th>No. Factura</th>
                                        <th>Descripción</th>
                                        <th>Fecha</th>
                                        <th>KM</th>
                                        <th>Operador</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach (
                                        ObtenerMantenimientos()
                                        as $row
                                    ) { ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo ObtenerUnidad(
                                                $row['unidad']
                                            ); ?></td>
                                            <td><?php echo $row[
                                                'taller'
                                            ]; ?></td>
                                            <td><?php echo $row[
                                                'nofactura'
                                            ]; ?></td>
                                            <td><?php echo $row[
                                                'descripcion'
                                            ]; ?></td>
                                            <td><?php echo $row[
                                                'fecha'
                                            ]; ?></td>
                                            <td><?php echo $row['km']; ?></td>
                                            <td><?php echo obtenerOperador(
                                                $row['operador']
                                            ); ?></td>
                                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted sr-only">Action</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="dropdown-item" type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#editarCliente<?php echo $row[
                                                        'id'
                                                    ]; ?>">Editar</button>
                                                    <button class="dropdown-item" onclick="eliminarCliente(<?php echo $row[
                                                        'id'
                                                    ]; ?>)">Eliminar</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php include '../modals/mantenimientos/editar.php'; ?>
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