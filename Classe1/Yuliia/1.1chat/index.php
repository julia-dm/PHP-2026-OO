<?php 
require_once "Chat.php";

// instanction d'un chat

$chat=new Chat("Tom",10);

// affichange 
echo "Nom: $chat->nom | Age: $chat->age <br>";
$chat->nom="Felix";
$chat->age=3;
echo "Nom: $chat->nom | Age: $chat->age <br>";

echo $chat->miauler() . PHP_EOL;

echo "Nom: $chat->nom | Age: $chat->age | fait : {$chat->miauler()}<br>";

echo $chat->sePresenter() . "<br>";

$chat2=new Chat(
    nom:"Jaque",
    age:4);
echo $chat2->sePresenter() . PHP_EOL;

