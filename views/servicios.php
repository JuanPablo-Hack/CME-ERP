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
                            <table class="table datatables" id="dataTable-1" data-ordering="false">
                                <thead>
                                    <tr>
                                        <th >Folio</th>
                                        <th>Cliente</th>
                                        <th>Origen</th>
                                        <th>Destino</th>
                                        <th>No. Contenedor</th>
                                        <th>Asignado</th>
                                        <th>Recinto</th>
                                        <th>Hora</th>
                                        <th>Despacho</th>
                                        <th>Entrega</th>
                                        <th>Vació</th>
                                        <th>Estado</th>
                                        <th>Facturado</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach (
                                        obtenerServicios()
                                        as $row
                                    ) { ?>
                                        <tr>
                                            <td title="<?php echo $row[
                                                'costro_extras'
                                            ]; ?>"><?php echo 'CME-' .
    date('Y') .
    '-' .
    $row['id']; ?></td>
                                            <td><?php echo obtenerCliente(
                                                $row['cliente']
                                            ); ?></td>
                                            <td><?php echo $row[
                                                'origen'
                                            ]; ?></td>
                                            <td><?php echo $row[
                                                'destino'
                                            ]; ?></td>
                                            <td title="<?php echo $row[
                                                'asegurado'
                                            ]; ?>"><?php echo $row[
    'no_contenedores'
]; ?></td>
                                            <td><?php echo $row['proveedor'] < 1
                                                ? 'CME LOGISTICS'
                                                : ObtenerProveedor(
                                                    $row['proveedor']
                                                ); ?></td>
                                            <td><?php echo $row[
                                                'recinto_test'
                                            ]; ?></td>
                                            <td><?php echo $row['hora']; ?></td>
                                            <td><?php echo $row[
                                                'posicionamiento'
                                            ]; ?></td>
                                            <td><?php echo $row[
                                                'pedimente'
                                            ]; ?></td>
                                            <td><?php echo $row[
                                                'recinto'
                                            ]; ?></td>
                                            <td><?php echo obtenerEstado(
                                                $row['estado']
                                            ); ?></td>
                                             <td><?php echo obtenerEstadoFacturas(
                                                 $row['facturado']
                                             ); ?></td>
                                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted sr-only">Action</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="dropdown-item" type="button" class="btn mb-2 btn-outline-secondary" onclick="crearPDF(<?php echo $row[
                                                        'id'
                                                    ]; ?>)">Generar PDF</button>
                                                    <button class="dropdown-item" type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#detallesServicio<?php echo $row[
                                                        'id'
                                                    ]; ?>">Detalles</button>
                                                    <button class="dropdown-item" type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#editarServicio<?php echo $row[
                                                        'id'
                                                    ]; ?>">Editar</button>
                                                    <button class="dropdown-item" type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#extrasServicio<?php echo $row[
                                                        'id'
                                                    ]; ?>">Extras</button>
                                                    <button class="dropdown-item" onclick="CambiarEstado(<?php echo $row[
                                                        'id'
                                                    ]; ?>,2)">Entregado</button>
                                                    <button class="dropdown-item" onclick="CambiarEstado(<?php echo $row[
                                                        'id'
                                                    ]; ?>,3)">Vació
                                                    </button>
                                                    <button class="dropdown-item" onclick="CambiarEstado(<?php echo $row[
                                                        'id'
                                                    ]; ?>,4)">Cancelar</button>

                                                </div>
                                            </td>
                                        </tr>
                                        <?php include '../modals/servicios/detalles.php'; ?>
                                        <?php include '../modals/servicios/editar.php'; ?>
                                        <?php include '../modals/servicios/extras.php'; ?>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>