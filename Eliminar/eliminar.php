<?php

	include '../lib/conexion.php';
	$idProducto = $_POST['idProducto'];

	$sql="DELETE FROM producto WHERE id_producto='".$idProducto."';";

	$resultado=mysqli_query($con,$sql);
	echo"<center>";
	echo ("Producto eliminado con Exito!");
	mysqli_close($con);

?>

<a href="../index.php" >Volver al Inicio</a>