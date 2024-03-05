<?php  

// Funcion para agregar un zona horaria especifica para el entorno PHP

date_default_timezone_set("America/Mexico_City");

// Vamos a obtener la fecha actual

//$now = date("Y-m-d H:i:s:a");
//$now  = date_create(); // para fechas que se quisieran manipular- devuelve una clase dateTime

echo strtotime("14 February 1996");