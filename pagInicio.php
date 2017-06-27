<html>
<?php
session_start();

?>
    
    <link href="Css/estilos.css" rel="stylesheet" type="text/css"/>
<div id="welcome">
 <h3>Bienvenido, <?php echo $_SESSION['nombre'];?>! </h3>
 <p><a href="">Finalice</a> sesión aquí!</p>
</div>
    
<frameset rows="120,*">
	<frame name="alto" src="superior.html">
	<frameset cols="150,*"> 
		<frame name="sx" src="menu_lateral.html">
		<frame name="central" src="">
	</frameset> 
</frameset>
</html>