<?php  

/**
 * Vamos a filtrar las edades de un array con funciones anonimas 
 * Tambien se realiza la comparacion con arrow functions...
 */

  $edades = [5, 10, 22, 57, 64, 1, 70];

//  $mayores = array_filter($edades , function($current){
//          return $current >=18;
//  });


$mayores = array_filter($edades, fn($current) => $current >=18 );
print_r($mayores);
