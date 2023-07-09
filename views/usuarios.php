<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Lista de Usuarios</h2>
            <br>
            <button type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#varyModal"
                data-whatever="@mdo">
                Agregar Usuario
            </button>
            <?php include "../modals/usuarios/agregar.php"; ?>
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table datatables" id="dataTable-1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Télefono</th>
                                        <th>Cargo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "../controllers/Selects.php";
                                    foreach (ObtenerUsuarios() as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id']  ?></td>
                                        <td><?php echo $row['nombre']  ?></td>
                                        <td><?php echo $row['correo']  ?></td>
                                        <td><?php echo $row['tel']  ?></td>
                                        <td><?php echo $row['cargo']  ?></td>
                                        <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <button class="dropdown-item" type="button"
                                                    class="btn mb-2 btn-outline-secondary" data-toggle="modal"
                                                    data-target="#editarUsuario<?php echo $row['id']  ?>">Editar</button>
                                                <button class="dropdown-item"
                                                    onclick="eliminarUsuario(<?php echo $row['id']  ?>)">Eliminar</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php include "../modals/usuarios/editar.php"; ?>
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