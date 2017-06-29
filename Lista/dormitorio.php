<link href="../css/estilos.css" rel="stylesheet" type="text/css"/>
<?php

include ('../lib/conexion.php');

$resultado = mysqli_query($con, "SELECT * FROM producto");



while ($registro = mysqli_fetch_array($resultado))
{
    echo $registro['id_producto'];
    echo $registro['nombre_producto'];
    echo $registro['precio'];
    echo $registro['stock'];
}

?>