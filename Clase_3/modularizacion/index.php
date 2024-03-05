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
    <li><?=$mrmichi->getName()?> dice <?=$mrmichi->sayMeow()?></li>
    <li><?=$michisancio->getName()?> dice <?=$michisancio->sayMeow()?></li>
    <li><?=$michaves->getName()?> dice <?=$michaves->sayMeow()?></li>
</ul>
    
</body>
</html>