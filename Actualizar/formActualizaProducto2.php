<?php
	include '../lib/conexion.php';
	$idProducto = $_POST['id_producto'];
	$sql="SELECT * FROM persona WHERE id_producto='".$idProducto."';";

	$resultado=mysqli_query($con,$sql);
        
if ($fila = mysqli_fetch_array($resultado)):
?>
   <br>ID : <?php echo $fila['id_producto']; ?></br>
   <br>NOMBRE : <?php echo $fila['nombre_producto']; ?></br>
   <FORM METHOD="POST" ACTION="actualiza.php" TARGET="central">
	<input required type="text" value="<?php echo $fila['nombre_completo']; ?>" name="nombre_producto" /><br>
	</br>
	<input type="number" required value="<?php echo $fila['edad']; ?>" name="edad" minlength="1" 
					title="no existen negativos :/"/>
	</br>
				Comuna
				<?php
				include '../lib/conexion.php';

				$sSQL="SELECT id_producto FROM producto";
				$result=mysqli_query($con,$sSQL);
				echo '<select name="codigo">';
				while ($row=mysqli_fetch_array($result))
				{echo "<option>".$row["codigo"];}
				mysqli_free_result($result);
				?>
   <input type="hidden" value="<?php echo $fila['id_producto']; ?>" name="id_producto" /><br>	
   <input type="hidden" value="<?php echo $fila['nombre_producto']; ?>" name="nombre_producto" /><br>
   <input type="submit" value="Actualizar" /></center>
<?php
else:
	echo "<BR><h1>No Existen Productos Registrados!</h1>";
endif;
	echo "</center>";
	mysqli_close($con);
?>