<?php  

/**Vamos a añadir tiempo a funcnioes de fecahas establecidas
 * Por procedimientos y estructructurada+
 * Funciones...
 */

 //Añadir 5 dias por por estilo de procedimientos.
 
//   $interval = date_interval_create_from_date_string("5 days");
//   $date = date_create();

//   date_add($date, $interval );
//   echo date_format($date,"Y-m-d");


/** POO*/
$interval = DateInterval::createFromDateString("5 days");
$date = new Datetime();
$date->add($interval);
echo $date->format("Y-m-d");