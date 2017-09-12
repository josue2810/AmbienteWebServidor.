<DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"
	<title>Primera Clase</title>
</head>
<body>
	<h1>Mi sitio</h1>
	<h2><?php echo date("Y-m-d h:i:s"); ?></h2>
	<p>Ejemplo</p>
	<ul><!--clase.php -->
		<li><a href="tiempo.php"> Tiemo libre <br><br><img src="descarga.jpg">  </li>
		
		<li><a href="Vacaciones.php">Vacaciones<br><br><img src="vacaciones.jpg"></li>
		<hr>
		<div align="center">
		<a href="http://localhost:3700/s1/">Resgresar</a>
		<br>
		Diseño 2017
		</div>
			
		
	</ul>
	<?php echo "<b>Diseño ".date("Y")."</b>"; ?>
</body>
</html>