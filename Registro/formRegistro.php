<html>
<head><title>Ingreso de personas"</title></head>
    <body>
	<div>
            <center>
                <link href="../Css/estilos.css" rel="stylesheet" type="text/css"/>
		<h2>Formulario Registro</h2>
                <form method="POST" action="../Registro/crearProducto.php">
			<input required type="text" name="nombreProducto" placeholder="Producto" />
			<br>
			<input required type="text" name="idCategoria" placeholder="ID Categoria"/>
                        <br>
                        <input required type="text" name="precio" placeholder="Precio" />
			<br>
			<input required type="text" name="stock" placeholder="Cantidad"/>
				
			</br>
			<input type="submit" value="Registrar Producto"></input>
		</form>
            </center>
        </div>
		<div><center>
			<form method="POST" action="index.php">
			<button type="submit">Volver</button>
			</form>
    </body>
</html>