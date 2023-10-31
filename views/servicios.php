<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Lista de servicios</h2>
            <br>
            <button type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#varyModal" data-whatever="@mdo">
                Agregar servicio
            </button>
            <?php
            include '../controllers/Selects.php';
            include '../modals/servicios/agregar.php';
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
                                        <th>Subcliente</th>
                                        <th>Fecha de posicionamiento</th>
                                        <th>Pedimento</th>
                                        <th>Recinto</th>
                                        <th>Mercancia</th>
                                        <th>Estado</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach (
                                        obtenerServicios()
                                        as $row
                                    ) { ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo obtenerCliente(
                                                $row['cliente']
                                            ); ?></td>
                                            <td><?php echo obtenerCliente(
                                                $row['subcliente']
                                            ); ?></td>
                                            <td><?php echo $row[
                                                'posicionamiento'
                                            ]; ?></td>
                                            <td><?php echo $row['pedimente']; ?></td>
                                            <td><?php echo $row['recinto']; ?></td>
                                            <td><?php echo $row['mercancia']; ?></td>   
                                            <td><?php echo obtenerEstado(
                                                 $row['estado']
                                             ); ?></td>
                                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted sr-only">Action</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="dropdown-item" type="button"
                                                    class="btn mb-2 btn-outline-secondary" onclick="crearPDF(<?php echo $row[
                                                        'id'
                                                    ]; ?>)">Generar PDF</button>
                                                    <button class="dropdown-item" type="button"
                                                    class="btn mb-2 btn-outline-secondary" data-toggle="modal"
                                                    data-target="#detallesServicio<?php echo $row[
                                                        'id'
                                                    ]; ?>">Detalles</button>
                                                    <button class="dropdown-item" type="button"
                                                    class="btn mb-2 btn-outline-secondary" data-toggle="modal"
                                                    data-target="#editarServicio<?php echo $row[
                                                        'id'
                                                    ]; ?>">Editar</button>
                                                    <button class="dropdown-item" onclick="eliminarCliente(<?php echo $row[
                                                        'id'
                                                    ]; ?>)">Cancelar</button>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        <?php include '../modals/servicios/detalles.php'; ?>
                                        <?php include '../modals/servicios/editar.php'; ?>
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
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
    integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  ></script>
