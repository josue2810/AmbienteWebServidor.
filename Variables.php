<?php /* variables.php */
echo "<h1>Variables</h1>";
$nombre="Ricardo";
$edad=24;
echo "<h3> Me llamo $nombre y tengo $edad años</h3>"; //Si uso comillas simples, no lee las variables
echo '<h3> Me llamo $nombre y tengo $edad años</h3>';

$edadMeses= $edad*12;
echo "<p> Edad en meses: $edadMeses";