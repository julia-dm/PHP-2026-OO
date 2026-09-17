<?php


class Animal{
    // Propriétés
    protected ?string $name = null;

    // Méthodes

    // constructeur
    public function __construct(string $lulu)
    {
        $this->setName($lulu);
    }

    // setter (ou mutator)
    public function setName(string $nom):void
    {
        $nom = strip_tags(trim($nom));
        $longueur = strlen($nom);
        if($longueur < 2)
            throw new Exception("Votre nom est trop court");
        if($longueur > 25)
            throw new Exception("Votre nom est trop long");


        $this->name = $nom;
    }
    // getter
    public function getName():string
    {
        return $this->name;
    }
}