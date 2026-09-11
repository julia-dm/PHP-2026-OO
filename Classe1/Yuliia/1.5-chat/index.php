<?php
require_once "MonChaton.php";

// instanciation de MonChaton 
$mon_premier_chaton = new MonChaton(
    nom: "Grosminet",
    age: 5
);

// on vérifie public public function sePresenter()
// qui affiche des propriétés public et private
echo $mon_premier_chaton->sePresenter();
echo "<br>";
// impossible d'afficher age directement car private
//echo $mon_premier_chaton->nom;
echo "<h3>getter</h3><p>Por pécupere une propriété non publique</p>";
// {} concatenation spéciale pour OO
echo "Getter de age: {$mon_premier_chaton->getAge()}<br>";

echo "<h3>setter</h3><p>Por pécupere une propriété non publique</p>";
//modification de l'age à 8ans
$mon_premier_chaton->setAge(i:8);
echo "Getter de age: {$mon_premier_chaton->getAge()}<br>";
//modification de l'age à -5ans
$mon_premier_chaton->setAge(i:-5);
echo "Getter de age: {$mon_premier_chaton->getAge()}<br>";
//modification de l'age à 38ans
$mon_premier_chaton->setAge(i:38);
echo "Getter de age: {$mon_premier_chaton->getAge()}<br>";

//copie, ne clone pas l'instance,
//il rajoute un lien vers le meme objet
$copie = $mon_premier_chaton;
// $copie->nom="Titi"; // change l'instance les 2 liens, car meme objet
var_dump($mon_premier_chaton,
//$copie
);

