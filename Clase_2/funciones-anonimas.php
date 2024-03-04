<?php 

$numbers =[ 1, 2, 3, 4];   //Todos los numeros de este arreglo los multiplicaremos  x 2
/**
 *  la funcion array_map recibe el arreglo que queremos recorrer y a cada elemento le aplica la funcion que recibe .
 */
$numbers_by_2 = array_map(function($current){ 
    return $current * 2;
},$numbers);

print_r($numbers_by_2);
echo"\n";
