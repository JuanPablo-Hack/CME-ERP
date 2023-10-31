<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Lista de subclientes</h2>
            <br>
            <button type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#varyModal"
                data-whatever="@mdo">
                Agregar Subclientes
            </button>
            <?php 
                include '../controllers/Selects.php';
                include '../modals/subclientes/agregar.php'; 
            ?>
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table datatables" id="tabla_subclientes">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Cliente de</th>
                                        <th>Nombre</th>  
                                        <th>RFC</th>
                                        <th>Dirección</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach (ObtenerSubClientes() as $row) { ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo obtenerCliente(
                                                $row['id_cliente']
                                            ); ?></td>
                                        <td><?php echo $row[
                                            'nombre'
                                        ]; ?></td>
                                        <td><?php echo $row[
                                            'rfc'
                                        ]; ?></td>
                                       <td><?php echo $row[
                                            'dir'
                                        ]; ?></td>
                                        <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <button class="dropdown-item" type="button"
                                                    class="btn mb-2 btn-outline-secondary" data-toggle="modal"
                                                    data-target="#editarSubCliente<?php echo $row[
                                                        'id'
                                                    ]; ?>">Editar</button>
                                                    
                                                <button class="dropdown-item"
                                                    onclick="eliminarCliente(<?php echo $row[
                                                        'id'
                                                    ]; ?>)">Eliminar</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php include '../modals/subclientes/editar.php'; ?>
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