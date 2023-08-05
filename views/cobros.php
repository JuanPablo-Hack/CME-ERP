<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Lista de Cobros</h2>
            <br>
            <button type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#varyModal" data-whatever="@mdo">
                Agregar Cobros
            </button>
            <?php
            include "../modals/cobros/agregar.php";
            include "../controllers/Selects.php";
            ?>
            <div class="row my-4">

                <div class="col-md-12">
                    <div class="card shadow">
                        <br>
                        <h2>Cobros clientes</h2>
                        <div class="card-body">
                            <table class="table datatables" id="dataTable-1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Folio relacionado</th>
                                        <th>IVA </th>
                                        <th>Retencion </th>
                                        <th>Estadías </th>
                                        <th>IVA Estadías </th>
                                        <th>Lavado</th>
                                        <th>Burreo </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    foreach (obtenerCobrosClientes() as $row) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['id']  ?></td>
                                            <td><?php echo $row['id_servicio']  ?></td>
                                            <td><?php echo $row['iva_cliente']  ?></td>
                                            <td><?php echo $row['retencion_cliente']  ?></td>
                                            <td><?php echo $row['estadias_cliente']  ?></td>
                                            <td><?php echo $row['iva_estadias_cliente']  ?></td>
                                            <td><?php echo $row['lavado_cliente']  ?></td>
                                            <td><?php echo $row['burreo_cliente']  ?></td>
                                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted sr-only">Action</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="dropdown-item" type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#editarCliente<?php echo $row['id']  ?>">Editar</button>
                                                    <button class="dropdown-item" onclick="eliminarCliente(<?php echo $row['id']  ?>)">Eliminar</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php include "../modals/clientes/editar.php"; ?>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <h2>Cobros proveedores</h2>
                        <div class="card-body">
                            <table class="table datatables" id="dataTable-1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Folio relacionado</th>
                                        <th>IVA </th>
                                        <th>Retencion </th>
                                        <th>Estadías </th>
                                        <th>IVA Estadías </th>
                                        <th>Lavado</th>
                                        <th>Burreo </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    foreach (obtenerCobrosProveedores() as $row) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['id']  ?></td>
                                            <td><?php echo $row['id_servicio']  ?></td>
                                            <td><?php echo $row['iva_cliente']  ?></td>
                                            <td><?php echo $row['retencion_cliente']  ?></td>
                                            <td><?php echo $row['estadias_cliente']  ?></td>
                                            <td><?php echo $row['iva_estadias_cliente']  ?></td>
                                            <td><?php echo $row['lavado_cliente']  ?></td>
                                            <td><?php echo $row['burreo_cliente']  ?></td>
                                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted sr-only">Action</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="dropdown-item" type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#editarCliente<?php echo $row['id']  ?>">Editar</button>
                                                    <button class="dropdown-item" onclick="eliminarCliente(<?php echo $row['id']  ?>)">Eliminar</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php include "../modals/clientes/editar.php"; ?>
                                    <?php
                                    }
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