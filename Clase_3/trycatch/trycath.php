<?php  

try {
   
    $resultado = 20/0;
    echo $resultado;

} catch(\Throwable $e) {
    
    //echo $e->getMessage();
    echo "algo salio mal";

}

echo "<br>";

echo "esto pasa si o si";