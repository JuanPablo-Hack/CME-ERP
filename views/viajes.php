<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Lista de viajes</h2>
            <br>
            <button type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#varyModal" data-whatever="@mdo">
                Agregar Viaje
            </button>
            <?php
            include '../controllers/Selects.php';
            include '../modals/viajes/agregar.php';
            ?>
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table datatables" id="dataTable-1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>REF. SERVICIO</th>
                                        <th>KM</th>
                                        <th>DIESEL</th>
                                        <th>INGRESO PUERTO</th>
                                        <th>MANIOBRAS</th>
                                        <th>PISTAS</th>
                                        <th>OPERADOR</th>
                                        <th>OTROS</th>
                                        <th>COMIDA</th>
                                        <th>ESTADO</th>
                                        <th>OBSERVACIONES</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach (obtenerViajes() as $row) { ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row[
                                                'ref_int'
                                            ]; ?></td>
                                            <td><?php echo $row['km']; ?></td>
                                            <td><?php echo $row[
                                                'diesel'
                                            ]; ?></td>
                                            <td><?php echo $row[
                                                'ingreso_puerto'
                                            ]; ?></td>
                                            <td><?php echo $row[
                                                'maniobras'
                                            ]; ?></td>
                                            <td><?php echo $row[
                                                'pistas'
                                            ]; ?></td>
                                            <td><?php echo $row[
                                                'operador'
                                            ]; ?></td>
                                            <td><?php echo $row[
                                                'otros'
                                            ]; ?></td>
                                            <td><?php echo $row[
                                                'comida'
                                            ]; ?></td>
                                            <td><?php echo $row[
                                                'comision'
                                            ]; ?></td>
                                            <td><?php echo $row[
                                                'id_estado'
                                            ]; ?></td>
                                            <td><?php echo $row[
                                                'observaciones'
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
                                        <?php include '../modals/viajes/editar.php'; ?>
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