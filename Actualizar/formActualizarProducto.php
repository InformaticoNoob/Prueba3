<HTML>
<HEAD>
<TITLE>Actualizar Una Persona</TITLE>
</HEAD>
<BODY>
    <link href="../Css/Main.css" rel="stylesheet" type="text/css"/>
<div align="center">
<h1>Actualizar Un Producto</h1>
<br>
<FORM METHOD="POST" ACTION="../Actualizar/formActualizaProducto2.php">
Elija El ID del Producto
<?php
include '../lib/conexion.php';

$sSQL="Select id_producto From producto";
$result=mysqli_query($con,$sSQL);
echo '<select name="id_producto">';
while ($row=mysqli_fetch_array($result))
{echo "<option>".$row["id_producto"];}
mysqli_free_result($result);
?>
<INPUT TYPE="SUBMIT" value="Continuar"/>
</FORM>
</BODY>
</HTML>