<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Lista de Combustible</h2>
            <br>
            <button type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#varyModal"
                data-whatever="@mdo">
                Agregar combustible
            </button>
            <?php include "../modals/combustibles/agregar.php"; ?>
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table datatables" id="dataTable-1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Unidad</th>
                                        <th>KM Inicial</th>
                                        <th>KM Final</th>
                                        <th>Tipo Servicio</th>
                                        <th>Litros</th>
                                        <th>Rendimiento</th>
                                        <th>Factura</th>
                                        <th>Operador</th>
                                        <th>Importe</th>
                                        <th>Creado</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "../controllers/Selects.php";
                                    foreach (ObtenerCombustibles() as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id']  ?></td>
                                        <td><?php echo $row['unidad']  ?></td>
                                        <td><?php echo $row['kminicial']  ?></td>
                                        <td><?php echo $row['kmfinal']  ?></td>
                                        <td><?php echo $row['tiposervicio']  ?></td>
                                        <td><?php echo $row['litros']  ?></td>
                                        <td><?php echo $row['rendimiento']  ?></td>
                                        <td><?php echo $row['factura']  ?></td>
                                        <td><?php echo $row['operador']  ?></td>
                                        <td><?php echo $row['importe']  ?></td>
                                        <td><?php echo $row['creado']  ?></td>
                                        <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <button class="dropdown-item" type="button"
                                                    class="btn mb-2 btn-outline-secondary" data-toggle="modal"
                                                    data-target="#editarCombustible<?php echo $row['id']  ?>">Editar</button>
                                                <button class="dropdown-item"
                                                    onclick="eliminarCombustible(<?php echo $row['id']  ?>)">Eliminar</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php include "../modals/combustibles/editar.php"; ?>
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