<?php  

require("Classes/MichisDisponibles/Michi.php");
require("Classes/MichisAdoptados/Michi.php");

use MichisDisponibles\Michi;
use MichisAdoptados\Michi as MichisAdoptados;

$mrmichi = new Michi("Mr.michi", "Blanquito",16);
$michisancio = new Michi("Michisancio", "Naranja",14);
$michaves = new Michi("Michaves", "negrito",15);        

$mrmichi_adopted = new MichisAdoptados("Mrmichi", new DateTime("2022-04-21"), "Jonathan");
$michisancio_adopted = new MichisAdoptados("Michisancio", new DateTime("2022-03-21"),"Retaxito");
$michaves_adopted = new MichisAdoptados("Michaves", new DateTime("2022-02-21"),"pedrito");   
  