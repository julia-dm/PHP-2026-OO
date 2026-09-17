<?php
require_once "Animal.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <?php
    $chien = new Animal("Rex<br>");
    echo "Mon animal se nome ".$chien->getName();

    var_dump($chien);
    ?>
</body>
</html>