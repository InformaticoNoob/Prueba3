<?php
include 'conexion.php';
    $idProducto=$_POST["id_producto"];
    $nombre=$_POST["nombre_producto"];
    $categoria=$_POST["id_categoria"];
    $precio=$_POST["precio"];
    $stock=$_POST["stock"];
    $sql="UPDATE producto SET nombre_producto='".$nombre."',categoria=".$categoria.",precio=".$precio."
		WHERE id_producto='".$idProducto."';";

	$resultado=mysqli_query($con,$sql);
	echo"<center>";
	echo ("Producto Modificado");
	mysqli_close($con);
?>