<?php

// la classe est ecrit en PascalCase
// elle n'est pas un objet en tant que tel
// mais plutot une fabrique à créer des objets
class MyFirstClass{
// Propriétés (var de la classe), plus souvant du camelCase 
// public (accessible et modofiable en dehors de la classe)
public string $name='';
// privat (accessible et modofiable que dans la classe ou son instance)
private string $surName='';
// protected (accessible et modofiable que dans la classe ou son instance ET/OU dans ses enfants => "héritage")
protected ?int $identifiant=null; // null par defaut, null ou int ?int
// Constantes (Conteneurs invariables de la classe)
const IS_ALIVE=true;//par defaut publique, typage autorisé à partir de PHP 8.3

// Méthodes (fonctions de la classe)
        // constructeur => passer des arguments à l'instance de classe 
        // est toujours publique et utilise la méthode magique __construct(arg)
        // est invoqué lors de l'instanciation (new)
        public function __construct(

    )
        {
            // self::class représent le nom de la class, donc de la fabrique 
            echo "on a crée une instance de ".self::class;
        }

        // méthode publique 
public function methodePublic():string{
// on peut l'utiliser por afficher ou modifier 
// les propriétés
// modification des propriétés (set)
$this->name="Dmytruk";
$this->surName="Yuliia";
$this->identifiant = mt_rand(1000000, 9999999);
// affichage
return $this->name." ".$this->surName." a comme identifiant ".$this->identifiant;
}
 
}

$first = new MyFirstClass();
echo "<hr>";
// appel d'une constante de classe
// echo $first::IS_ALIVE; // partir de l'instance n'est recommendé
echo MyFirstClass::IS_ALIVE;
echo "<hr>";
echo $first->methodePublic();
echo "<hr>";
var_dump($first);