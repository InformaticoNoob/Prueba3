<?php
include 'lib/Conexion.php';

/* Instancia el objeto de conexion */
$conn = new Conexion;

if ($conn->conectar()){
    
   $usuario=$_POST["usuario"];
   $password=$_POST["password"];

$sql="INSERT INTO usuario(usuario, password) values('$usuario', $password)";

echo $sql;

}

$sqlip = "select host from information_schema.processlist WHERE ID = connection_id();";
$resultado = $miconn->query($sqlip);

//Consultas de seleccion que devuelven un conjunto de resultados
    if($resultado = $miconn->query($sql))
    {
        //liberar el conjunto de resultados
        $miconn->close();
    }


?>
