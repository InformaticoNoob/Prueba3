<html>
<?php
session_start();

?>
    
    <link href="Css/Main.css" rel="stylesheet" type="text/css"/>
<div id="welcome">
 <h3>Bienvenido, <?php echo $_SESSION['nombre'];?>! </h3>
 <p><a href="index.php">Volver a Inicio</a></p>
</div>
    
<frameset rows="120,*">
	<frame name="alto" src="superior.html">
	<frameset cols="150,*"> 
		<frame name="sx" src="menu_lateral.html">
		<frame name="central" src="">
	</frameset> 
</frameset>
</html>