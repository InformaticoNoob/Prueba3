<?php
    include('../lib/conexion.php');
    $query = "SELECT * FROM producto WHERE id_categoria = 1";
    
    $resultado = $con->query($query);

?>

