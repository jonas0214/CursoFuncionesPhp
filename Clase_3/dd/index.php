<?php 
require"vendor/autoload.php";



class Michi{
    protected $patas = [];
    protected $color;

    public function __construct(string $color) {
        $this->color = $color;
        for ($i=0; $i < 4; $i++) { 
            $this->patas[$i]=  new PataDeMichi();
        }
    }

}

class PataDeMichi
{
    protected $nails = 4;
    protected $description = "Tiene manchitas";

    public function get_description() : string {
        return $this->description;
    }
}

$casa_de_michis = array(
    "nombre" => "michilango",
    "ubicacion" => [
        "pais" => "Mexico",
        "cuidad" =>"cuidad de mexico",
        "colonia" =>"Doctores",
        "numero" => 27
    ],
    "numero_de_michis" => 3,
    "michis" => [
        new Michi("blanco"),
        new Michi("Negro"),
        new Michi("gris"),
    ]

);


dd($casa_de_michis);    