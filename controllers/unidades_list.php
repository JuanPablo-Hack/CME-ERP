<?php
include '../config/UserDBInfo.php';
$conexion = mysqli_connect(SERVER,USER,PASSWORD,DBNAME);
$id = $_POST['id'];
$SQL = "SELECT * from unidades where id_proveedor  = $id";
$result = $conexion->query($SQL);
while ($row = mysqli_fetch_array($result)) { ?>
   <option value="<?php echo $row['id']; ?>"><?php echo $row[
    'numero_sct'
]; ?></option>

   <?php }

?>