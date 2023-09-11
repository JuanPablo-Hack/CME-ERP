<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Lista de Facturas Gastos</h2>
            <br>
            <button type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#varyModal" data-whatever="@mdo">
                Agregar Factura Gastos
            </button>
            <?php include "../modals/facturas_emitidas/agregar.php"; ?>
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table datatables" id="dataTable-1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Fecha de Emisión</th>
                                        <th>Serie</th>
                                        <th>Folio</th>
                                        <th>RFC Emisor</th>
                                        <th>Nombre Emisor</th>
                                        <th>Importe</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "../controllers/Selects.php";
                                    foreach (obtenerFacturasEmitidas() as $row) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['id']  ?></td>
                                            <td><?php echo $row['fecha_emision']  ?></td>
                                            <td><?php echo $row['serie']  ?></td>
                                            <td><?php echo $row['folio']  ?></td>
                                            <td><?php echo $row['rfc_emisor']  ?></td>
                                            <td><?php echo $row['nombre_emisor']  ?></td>
                                            <td><?php echo $row['importe']  ?></td>
                                            <td><?php echo $row['total']  ?></td>
                                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted sr-only">Action</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="dropdown-item" type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#editarCliente<?php echo $row['id']  ?>">Editar</button>
                                                    <button class="dropdown-item" onclick="eliminarCliente(<?php echo $row['id']  ?>)">Eliminar</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php include "../modals/facturas_emitidas/editar.php"; ?>
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