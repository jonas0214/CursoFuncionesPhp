<?php 
 require("Logic/CreateMichis.php");
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<ul>
    <li><?=$mrmichi->getName()?> adoptado por: <?=$mrmichi_adopted->getAdopted_by()?> </li>
    <li><?=$michisancio->getName()?> adoptado por: <?=$michisancio_adopted->getAdopted_by()?></li>
    <li><?=$michaves->getName()?> adoptado por: <?=$michaves_adopted->getAdopted_by()?></li>
</ul>
    
</body>
</html>