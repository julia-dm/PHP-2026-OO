<?php

require 'Animal.php';
require_once 'Chien.php';

$animal = new Animal("LaChose");
echo "Mon animal se nomme " . $animal->getName();
echo "<br>".$animal->manger();
echo "<br>".$animal->crier();
var_dump($animal);

$chien = new Chien("Rex");
echo "<br>Mon chien se nomme " . $chien->getName();
echo "<br>".$chien->manger();
echo "<br>".$chien->aboyer();
echo "<br>".$chien->crier();
// var_dump($chien);

