<?php
$num_conceptos = $_POST['num_conceptos'];
echo ' <h2>Cobros clientes</h2>';
for ($i = 0; $i < $num_conceptos; $i++) {
    $html = '
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputEmail4">CONCEPTO</label>
            <input type="text" class="form-control" name="cliente_cobros[]">
        </div>
        <div class="form-group col-md-3">
            <label for="inputEmail4">PRECIO</label>
            <input type="text" class="form-control" name="cliente_cobros[]">
        </div>
        <div class="form-group col-md-3">
            <label for="inputEmail4">IVA</label>
            <select class="form-control" id="example-select" name="cliente_cobros[]">
                          <option value="0">No</option>
                          <option value="1">Si</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="inputEmail4">ISR</label>
            <select class="form-control" id="example-select" name="cliente_cobros[]">
                          <option value="0">No</option>
                          <option value="1">Si</option>
            </select>
        </div>
    </div>';
    echo $html;
}
