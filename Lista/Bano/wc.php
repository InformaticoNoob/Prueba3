<link href="../../css/Main.css" rel="stylesheet" type="text/css"/>
<link href="../../css/Categoria.css" rel="stylesheet" type="text/css"/>

<?php

include ('../../lib/conexion.php');


$resultado = mysqli_query($con, "SELECT * FROM producto WHERE id_categoria = 3");



while ($registro = mysqli_fetch_array($resultado))
{
    echo "Nombre Producto: ";
    echo $registro['nombre_producto'];
    echo "<br>";
    echo "Precio: $";
    echo $registro['precio'];
    echo "<br>";
    echo "Stock Disponible: ";
    echo $registro['stock'];
}

?>
