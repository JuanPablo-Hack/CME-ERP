<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Lista de servicios</h2>
            <br>
            <button type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#varyModal" data-whatever="@mdo">
                Agregar servicio
            </button>
            <?php
            include '../controllers/Selects.php';
            include '../modals/servicios/agregar.php';
            ?>
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table datatables" id="dataTable-1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Origen</th>
                                        <th>Destino</th>
                                        <th>Contenedor / Carga Suelta</th>
                                        <th>Cliente</th>
                                        <th>Asignado a</th>
                                        <th>Unidad Operador</th>
                                        <th>Terminal</th>
                                        <th>Hora</th>
                                        <th>Despacho</th>
                                        <th>Entrega</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach (
                                        obtenerServicios()
                                        as $row
                                    ) { ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row[
                                                'origen'
                                            ]; ?></td>
                                            <td><?php echo $row[
                                                'destino'
                                            ]; ?></td>
                                            <td><?php echo $row[
                                                'contenedor'
                                            ]; ?></td>
                                            <td><?php echo obtenerCliente($row[
                                                'cliente'
                                            ]); ?></td>
                                            <td><?php echo obtenerOperador($row[
                                                'asignado'
                                            ]); ?></td>
                                            <td><?php echo ObtenerUnidad($row[
                                                'unidad'
                                            ]); ?></td>
                                            <td><?php echo $row[
                                                'terminal'
                                            ]; ?></td>
                                            <td><?php echo $row['hora']; ?></td>
                                            <td><?php echo $row[
                                                'despacho'
                                            ]; ?></td>
                                            <td><?php echo $row[
                                                'entrega'
                                            ]; ?></td>
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
                                        <?php include '../modals/servicios/editar.php'; ?>
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