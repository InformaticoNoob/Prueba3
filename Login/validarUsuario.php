<?php
include '../lib/conexion.php'; 
$usuario = $_POST['nombre'];
$pass = $_POST["clave"];
$sql="SELECT * FROM usuario WHERE nombre='".$usuario."' AND clave='".$pass."'";

$resultado=mysqli_query($con,$sql);

if (($resultado->num_rows)>= 1):
	session_start();
	$_SESSION['nombre'] = $usuario;
	header("Location: ../pagInicio.php");
else:
	echo "<script language=JavaScript>alert('El usuario y/o contraseña son incorrectos.');
		   history.back();</script>";
endif;
	echo "</center>";
	mysqli_close($con);
 
?>