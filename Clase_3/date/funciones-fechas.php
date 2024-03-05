<?php  

// Funcion para agregar un zona horaria especifica para el entorno PHP

date_default_timezone_set("America/Mexico_City");

// Vamos a obtener la fecha actual

//$now = date("Y-m-d H:i:s:a");
//$now  = date_create(); // para fechas que se quisieran manipular- devuelve una clase dateTime

//echo strtotime("14 February 1996");

// diferencia de tiempo

$today = new DateTime();
$mrmochi_birth = new DateTime("2020-03-25");
$interval = $mrmochi_birth->diff($today);
echo $interval->format("%y años con %d dias");