<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Lista de Productos</h2>
            <br>
            <button type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#varyModal" data-whatever="@mdo">
                Agregar Producto
            </button>
            <?php include "../modals/inventario/agregar.php"; ?>
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table datatables" id="dataTable-1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Cliente</th>
                                        <th>Proveedor</th>
                                        <th>Peso Bruto</th>
                                        <th>Peso Tara</th>
                                        <th>Peso Neto</th>
                                        <th>Descripción</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "../controllers/Selects.php";
                                    foreach (ObtenerInvetario() as $row) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['id']  ?></td>
                                            <td><?php echo $row['nombre']  ?></td>
                                            <td><?php echo $row['cliente']  ?></td>
                                            <td><?php echo $row['proveedor']  ?></td>
                                            <td><?php echo $row['peso_bruto']  ?></td>
                                            <td><?php echo $row['peso_tara']  ?></td>
                                            <td><?php echo $row['peso_neto']  ?></td>
                                            <td><?php echo $row['descrip']  ?></td>
                                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted sr-only">Action</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="dropdown-item" type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#editarCliente<?php echo $row['id']  ?>">Editar</button>
                                                    <button class="dropdown-item" onclick="eliminarCliente(<?php echo $row['id']  ?>)">Eliminar</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php include "../modals/inventario/editar.php"; ?>
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