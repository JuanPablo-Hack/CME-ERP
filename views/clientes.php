<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Lista de Clientes</h2>
            <br>
            <button type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#varyModal"
                data-whatever="@mdo">
                Agregar Cliente
            </button>
            <?php include '../modals/clientes/agregar.php'; ?>
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table datatables" id="tabla_clientes">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Razón Social</th>
                                        <th>Representante Legal</th>
                                        <th style="display: none;">E-mail</th>
                                        <th style="display: none;">Télefono</th>
                                        <th style="display: none;">Dirección</th>
                                        <th style="display: none;">C.P.</th>
                                        <th>Situación Fiscal</th>
                                        <th style="display: none;">Subcliente</th>
                                        <th style="display: none;">Correo Secundario</th>
                                        <th style="display: none;">Operativo</th>
                                        <th style="display: none;">Liga datos</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include '../controllers/Selects.php';
                                    foreach (ObtenerClientes() as $row) { ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row[
                                            'razon_social'
                                        ]; ?></td>
                                        <td><?php echo $row[
                                            'nombre_representante'
                                        ]; ?></td>
                                        <td style="display: none;"><?php echo $row[
                                            'email'
                                        ]; ?></td>
                                        <td style="display: none;"><?php echo $row[
                                            'telefono'
                                        ]; ?></td>
                                        <td style="display: none;"><?php echo $row[
                                            'dir'
                                        ]; ?></td>
                                        <td style="display: none;"><?php echo $row[
                                            'cp'
                                        ]; ?></td>
                                        <td><?php echo $row[
                                            'situacion_fiscal'
                                        ]; ?></td>
                                         <td style="display: none;"><?php echo $row[
                                             'subcliente'
                                         ]; ?></td>
                                        <td style="display: none;"><?php echo $row[
                                            'correo_secu'
                                        ]; ?></td>
                                        <td style="display: none;"><?php echo $row[
                                            'operativo'
                                        ]; ?></td>
                                        <td style="display: none;"><?php echo $row[
                                            'liga_datos'
                                        ]; ?></td>
                                        <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <button class="dropdown-item" type="button"
                                                    class="btn mb-2 btn-outline-secondary" data-toggle="modal"
                                                    data-target="#editarCliente<?php echo $row[
                                                        'id'
                                                    ]; ?>">Editar</button>
                                                     <button class="dropdown-item" type="button"
                                                    class="btn mb-2 btn-outline-secondary" data-toggle="modal"
                                                    data-target="#detalleCliente<?php echo $row[
                                                        'id'
                                                    ]; ?>">Ver detalle</button>
                                                <button class="dropdown-item"
                                                    onclick="eliminarCliente(<?php echo $row[
                                                        'id'
                                                    ]; ?>)">Eliminar</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php include '../modals/clientes/editar.php'; ?>
                                    <?php include '../modals/clientes/detalle.php'; ?>
                                    <?php }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>