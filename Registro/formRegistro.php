<html>
<head><title>Ingreso de Producto</title></head>
    <body>
	<div>
            <center>
                <link href="../Css/Main.css" rel="stylesheet" type="text/css"/>
		<h2>Formulario Registro</h2>
                <form method="POST" action="../Registro/crearProducto.php">
			<input required type="text" name="nombreProducto" placeholder="Producto" />
			<br>
			<input required type="text" name="idCategoria" placeholder="ID Categoria" pattern="(([1-6]){1})" title="El rango de 'Id Producto' es de 1 a 6"/>
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
                            
			<br>
                        
                        
                        <a href="../Index.php">Volver a Inicio</a>
                        
			</form>
    </body>
</html>