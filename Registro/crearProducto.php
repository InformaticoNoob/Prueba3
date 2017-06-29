<?php

include '../lib/conexion.php';

$nombreProducto=$_POST["nombreProducto"];
$idCategoria=$_POST["idCategoria"];
$precio=$_POST["precio"];
$stock=$_POST["stock"];
    
//$sql= "INSERT INTO producto(nombreProducto, idCategoria, precio, stock) values('".null."','".$nombreProducto."','".$idCategoria."','".$precio."','".$stock."')";
$sql= "INSERT INTO producto(nombre_producto, id_categoria, precio, stock) values('".$nombreProducto."','".$idCategoria."','".$precio."','".$stock."')";



//Ejecucion de la sentencia SQL
   $resultado=mysqli_query($con,$sql);
	mysqli_close($con);
	echo ("Producto Ingresado Con Exito");
        echo "<br>";
        
 
?>

<a href="../index.php" >Volver a Inicio</a>
<link href="../css/estilos.css" rel="stylesheet" type="text/css"/>



