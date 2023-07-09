<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Lista de proveedores</h2>
            <br>
            <button type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#varyModal"
                data-whatever="@mdo">
                Agregar Proveedor
            </button>
            <?php include "../modals/proveedores/agregar.php"; ?>
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table datatables" id="dataTable-1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Razón Social</th>
                                        <th>Representante Legal</th>
                                        <th>E-mail</th>
                                        <th>Télefono</th>
                                        <th>Dirección</th>
                                        <th>C.P.</th>
                                        <th>Situación Fiscal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "../controllers/Selects.php";
                                    foreach (ObtenerProveedores() as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id']  ?></td>
                                        <td><?php echo $row['razon_social']  ?></td>
                                        <td><?php echo $row['nombre_representante']  ?></td>
                                        <td><?php echo $row['email']  ?></td>
                                        <td><?php echo $row['telefono']  ?></td>
                                        <td><?php echo $row['dir']  ?></td>
                                        <td><?php echo $row['cp']  ?></td>
                                        <td><?php echo $row['situacion_fiscal']  ?></td>
                                        <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <button class="dropdown-item" type="button"
                                                    class="btn mb-2 btn-outline-secondary" data-toggle="modal"
                                                    data-target="#editarProveedor<?php echo $row['id']  ?>">Editar</button>
                                                <button class="dropdown-item"
                                                    onclick="eliminarProveedor(<?php echo $row['id']  ?>)">Eliminar</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php include "../modals/proveedores/editar.php"; ?>
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