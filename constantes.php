<?php  
$desicion = true;
if ($desicion){

    define("BLOCK_CONSTANT","Esta constante fue declarada dentro de un if");
    //const BLOCK_CONSTANT = "Esta constante fue declarada dentro de un if" ;  // No se puede declarar dentro del codigo 

}

echo BLOCK_CONSTANT;

echo "\n";
