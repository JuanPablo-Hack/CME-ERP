<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Lista de Cobros</h2>
            <br>
            <button type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#varyModal"
                data-whatever="@mdo">
                Agregar Cobros
            </button>
            <?php
            include '../controllers/Selects.php';
            include '../modals/cobros/agregar.php';
            ?>
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table datatables" id="tabla_cobros">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Ref. Interna</th>
                                        <th>No. Factura</th>
                                        <th>Fecha Despacho</th>
                                        <th>Origen</th>
                                        <th>Destino</th>
                                        <th>Contenedor</th>
                                        <th>Cliente</th>
                                        <th>Proveedor</th>
                                        <th>Costo Cliente</th>
                                        <th>Costo Proveedor</th>
                                        <th>Utilidad/Perdida</th>
                                        <th>Pagado Cliente</th>
                                        <th>Pagado Proveedor</th>
                                        <th>Estado</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach (ObtenerCobros() as $row) { ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <?php $datos_ref = ObtenerReferenciaServicios(
                                            $row['ref_int']
                                        ); ?>
                                        <td><?php echo 'CME-' .
                                            date('Y') .
                                            '-' .
                                            $row['ref_int']; ?></td>
                                        <td><?php echo $row[
                                            'no_factura'
                                        ]; ?></td>
                                        <th><?php echo $datos_ref[
                                            'posicionamiento'
                                        ]; ?></th>
                                        <th><?php echo $datos_ref[
                                            'origen'
                                        ]; ?></th>
                                        <th><?php echo $datos_ref[
                                            'destino'
                                        ]; ?></th>
                                        <th title="<?php echo $datos_ref[
                                            'asegurado'
                                        ]; ?>"><?php echo $datos_ref[
    'no_contenedores'
]; ?></th>
                                        <th><?php echo obtenerCliente(
                                            $datos_ref['cliente']
                                        ); ?></th>
                                        <th><?php echo $datos_ref['proveedor'] <
                                        1
                                            ? 'CME LOGISTICS'
                                            : ObtenerProveedor(
                                                $datos_ref['proveedor']
                                            ); ?></th>
                                        <td><?php echo number_format(
                                            calcularCobrosCliente($row['id']),
                                            2,
                                            '.',
                                            ','
                                        ); ?>
                                        </td>
                                        <td><?php echo number_format(
                                            calcularCobrosProveedor($row['id']),
                                            2,
                                            '.',
                                            ','
                                        ); ?>
                                        </td>
                                        <td><?php echo number_format(
                                            calcularCobrosCliente($row['id']) -
                                                calcularCobrosProveedor(
                                                    $row['id']
                                                ),
                                            2,
                                            '.',
                                            ','
                                        ); ?>
                                        </td>
                                        <td><?php echo $row[
                                            'pago_proveedor'
                                        ]; ?></td>
                                          <td><?php echo $row[
                                              'pago_cliente'
                                          ]; ?></td>
                                        <td><?php echo obtenerEstadoCobros(
                                            $row['id_estado']
                                        ); ?></td>
                                        <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <button class="dropdown-item" type="button"
                                                    class="btn mb-2 btn-outline-secondary" data-toggle="modal"
                                                    data-target="#detallesCobros<?php echo $row[
                                                        'id'
                                                    ]; ?>">Detalles</button>
                                                <button class="dropdown-item" type="button"
                                                    class="btn mb-2 btn-outline-secondary" data-toggle="modal"
                                                    data-target="#actualizarCobros<?php echo $row[
                                                        'id'
                                                    ]; ?>">Actualizar</button>
                                                <button class="dropdown-item" type="button"
                                                    class="btn mb-2 btn-outline-secondary" data-toggle="modal"
                                                    data-target="#editarCobros<?php echo $row[
                                                        'id'
                                                    ]; ?>">Editar</button>
                                                <button class="dropdown-item"
                                                    onclick="CambiarEstado(<?php echo $row[
                                                        'id'
                                                    ]; ?>,2)">Enviado</button>
                                                <button class="dropdown-item"
                                                    onclick="CambiarEstado(<?php echo $row[
                                                        'id'
                                                    ]; ?>,3)">Pagado</button>
                                                <button class="dropdown-item"
                                                    onclick="CambiarEstado(<?php echo $row[
                                                        'id'
                                                    ]; ?>,4)">Cancelado</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php include '../modals/cobros/detalles.php'; ?>
                                    <?php include '../modals/cobros/editar.php'; ?>
                                    <?php include '../modals/cobros/actualizar.php'; ?>
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