<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Lista de Tipo Servicios</h2>
            <br>
            <button type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#varyModal"
                data-whatever="@mdo">
                Agregar Tipo Servicio
            </button>
            <?php include "../modals/tipo_servicios/agregar.php"; ?>
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table datatables" id="dataTable-1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th>Descripción</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "../controllers/Selects.php";
                                    foreach (ObtenerTipoServicios() as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id']  ?></td>
                                        <td><?php echo $row['nombre']  ?></td>
                                        <td><?php echo number_format($row['precio'], 2, ".", ",")   ?></td>
                                        <td><?php echo $row['descripcion']  ?></td>
                                        <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <button class="dropdown-item" type="button"
                                                    class="btn mb-2 btn-outline-secondary" data-toggle="modal"
                                                    data-target="#editarTipoServicio<?php echo $row['id']  ?>">Editar</button>
                                                <button class="dropdown-item"
                                                    onclick="eliminarTipoServicio(<?php echo $row['id']  ?>)">Eliminar</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php include "../modals/tipo_servicios/editar.php"; ?>
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