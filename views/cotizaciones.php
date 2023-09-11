<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Lista de cotizaciones</h2>
            <br>
            <button type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#varyModal" data-whatever="@mdo">
                Agregar cotización
            </button>
            <?php
            include '../controllers/Selects.php';
            include '../modals/cotizaciones/agregar.php';
            ?>
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table datatables" id="dataTable-1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Cliente</th>
                                        <th>No. de Conceptos</th>
                                        <th>Estado</th>
                                        <th>Fecha de Expedición</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach (
                                        ObtenerCotizaciones()
                                        as $row
                                    ) { ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo obtenerCliente(
                                                $row['id_cliente']
                                            ); ?></td>
                                            <td><?php echo $row[
                                                'no_conceptos'
                                            ]; ?></td>
                                            <td><?php echo obtenerEstado(
                                                $row['id_estado']
                                            ); ?></td>
                                            <td><?php echo $row[
                                                'creado'
                                            ]; ?></td>
                                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted sr-only">Action</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="dropdown-item" type="button" class="btn mb-2 btn-outline-secondary" onclick="crearPDF(<?php echo $row[
                                                        'id'
                                                    ]; ?>)">Crear PDF</button>
                                                    <button class="dropdown-item" type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#editarcotización<?php echo $row[
                                                        'id'
                                                    ]; ?>">En Progreso</button>
                                                    <button class="dropdown-item" type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#editarcotización<?php echo $row[
                                                        'id'
                                                    ]; ?>">Finalizar</button>
                                                    <button class="dropdown-item" onclick="eliminarcotización(<?php echo $row[
                                                        'id'
                                                    ]; ?>)">Cancelar</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php include '../modals/cotizaciones/editar.php'; ?>
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