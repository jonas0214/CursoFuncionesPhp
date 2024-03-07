<?php

use App\Classes\Michi;
use App\Classes\MichisAdoptados;

function createMichis()
{

    $mr_michi = new Michi("michi","blanco",16);
    $mr_michi_adopt = new MichisAdoptados("Mrmichi",new DateTime("2024-03-06"),"Jonathan");

    echo $mr_michi->sayMeow() . "me adoptó". $mr_michi_adopt->getAdopted_by();
}
