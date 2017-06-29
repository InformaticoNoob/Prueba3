<?php

include '../lib/conexion.php';

$name=$_POST["nombre"];
$password=$_POST["clave"];
    
$sql= "INSERT INTO usuario(nombre_usuario, clave_usuario) values('".$name."','".$password."')";



//Ejecucion de la sentencia SQL
   $resultado=mysqli_query($con,$sql);
	mysqli_close($con);
	echo ("Persona Ingresada Con Exito");
        echo "<br>";
        

 
?>
<a href="../index.php" >Volver al Inicio</a>
<link href="../Css/estilos.css" rel="stylesheet" type="text/css"/>

