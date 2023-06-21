<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Data table</h2>
            <p class="card-text">
                DataTables is a plug-in for the jQuery Javascript library. It is
                a highly flexible tool, built upon the foundations of
                progressive enhancement, that adds all of these advanced
                features to any HTML table.
            </p>
            <button type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#varyModal" data-whatever="@mdo">
                Agregar Registro
            </button>
            <?php include "modals/test/agregar.php"; ?>
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table datatables" id="dataTable-1">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Department</th>
                                        <th>Company</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" />
                                                <label class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td>368</td>
                                        <td>Imani Lara</td>
                                        <td>(478) 446-9234</td>
                                        <td>Asset Management</td>
                                        <td>Borland</td>
                                        <td>9022 Suspendisse Rd.</td>
                                        <td>High Wycombe</td>
                                        <td>Jun 8, 2019</td>
                                        <td>
                                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Eliminar</a>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" />
                                                <label class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td>323</td>
                                        <td>Walter Sawyer</td>
                                        <td>(671) 969-1704</td>
                                        <td>Tech Support</td>
                                        <td>Macromedia</td>
                                        <td>Ap #708-5152 Cursus. Ave</td>
                                        <td>Bath</td>
                                        <td>May 8, 2020</td>
                                        <td>
                                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Eliminar</a>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" />
                                                <label class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td>371</td>
                                        <td>Noelle Ray</td>
                                        <td>(803) 792-2559</td>
                                        <td>Human Resources</td>
                                        <td>Sibelius</td>
                                        <td>Ap #992-8933 Sagittis Street</td>
                                        <td>Ivanteyevka</td>
                                        <td>Apr 2, 2021</td>
                                        <td>
                                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Eliminar</a>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" />
                                                <label class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td>302</td>
                                        <td>Portia Nolan</td>
                                        <td>(216) 946-1119</td>
                                        <td>Payroll</td>
                                        <td>Microsoft</td>
                                        <td>Ap #461-4415 Enim Rd.</td>
                                        <td>Kanpur Cantonment</td>
                                        <td>Dec 4, 2019</td>
                                        <td>
                                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Eliminar</a>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" />
                                                <label class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td>443</td>
                                        <td>Scarlett Anderson</td>
                                        <td>(486) 309-3564</td>
                                        <td>Tech Support</td>
                                        <td>Yahoo</td>
                                        <td>P.O. Box 988, 7282 Lobortis Avenue</td>
                                        <td>Lot</td>
                                        <td>Dec 27, 2019</td>
                                        <td>
                                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Eliminar</a>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" />
                                                <label class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td>345</td>
                                        <td>Kevyn Mills</td>
                                        <td>(976) 873-4833</td>
                                        <td>Tech Support</td>
                                        <td>Sibelius</td>
                                        <td>P.O. Box 666, 9803 Sed Avenue</td>
                                        <td>Fino Mornasco</td>
                                        <td>Dec 24, 2020</td>
                                        <td>
                                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Eliminar</a>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" />
                                                <label class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td>356</td>
                                        <td>Sharon Buckley</td>
                                        <td>(429) 517-6784</td>
                                        <td>Tech Support</td>
                                        <td>Sibelius</td>
                                        <td>Ap #372-3407 Sed St.</td>
                                        <td>Lompret</td>
                                        <td>Mar 3, 2021</td>
                                        <td>
                                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Eliminar</a>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" />
                                                <label class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td>263</td>
                                        <td>Fletcher Everett</td>
                                        <td>(735) 632-1255</td>
                                        <td>Customer Service</td>
                                        <td>Borland</td>
                                        <td>Ap #688-5120 Egestas Avenue</td>
                                        <td>Beerzel</td>
                                        <td>Mar 27, 2020</td>
                                        <td>
                                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Eliminar</a>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" />
                                                <label class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td>227</td>
                                        <td>Bertha Ball</td>
                                        <td>(656) 680-1553</td>
                                        <td>Sales and Marketing</td>
                                        <td>Finale</td>
                                        <td>951-3836 Ac Rd.</td>
                                        <td>Cherbourg-Octeville</td>
                                        <td>Feb 11, 2020</td>
                                        <td>
                                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Eliminar</a>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/simplebar.min.js"></script>
<script src="assets/js/daterangepicker.js"></script>
<script src="assets/js/jquery.stickOnScroll.js"></script>
<script src="assets/js/tinycolor-min.js"></script>
<script src="assets/js/config.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/js/apps.js"></script>
<script src="assets/js/test.js"></script>