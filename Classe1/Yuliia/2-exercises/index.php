<?php

// require_once "Animal.php";
// require_once "Chien.php";
// require_once "Chat.php";
// require_once "Perroquet.php";

// autoload local, valide que dans ce dossier.
spl_autoload_register(function (string $className) {
    // crée le nom du fichier recherché avec le nom de la classe
    $file = $className. '.php';
    if (file_exists($file)) {
        // on la charge dans notre index.php
        require_once $file;
    }
});


$rex = new Chien('Rex');

echo $rex->manger() . PHP_EOL;   // méthode HÉRITÉE d'Animal
echo $rex->crier() . PHP_EOL;    // méthode PROPRE à Chien


$felix = new Chat('Felix');
echo "<br>" . $felix->manger() . PHP_EOL;   // méthode 
echo "<br>" . $felix->crier() . PHP_EOL;    // méthode 
$animaux = [
    new Chien('Rex'),
    new Chat('Félix'),
    new Chien('Médor'),
    new Perroquet('Coco',"À l'abordage !"),
];

foreach ($animaux as $animal) {
    echo "<br>" . $animal->crier() . PHP_EOL;
}

// $truc = new Poisson('Truc');
// echo "<br>". $truc->manger() . PHP_EOL;   // méthode 
// echo "<br>". $truc->crier() . PHP_EOL;    // méthode 


// $coco = new Perroquet('Coco', "À l'abordage !");

// echo "<br>" . $coco->manger() . PHP_EOL;   // méthode HÉRITÉE d'Animal
// echo "<br>" . $coco->crier() . PHP_EOL;    // méthode PROPRE à Chien