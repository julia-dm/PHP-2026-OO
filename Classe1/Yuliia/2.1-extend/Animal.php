<?php

class Animal
{
    //propriétés
    protected ?string $nom = null;

    //méthode

    // constructeur
    public function __construct(string $lulu)
    {

        $this->setName($lulu);
    }
    /**
     * SETTER (Mutator)
     */

    public function setName(string $name): void
    {
        $name = strip_tags(trim($name));
        $longueur = strlen($name);
        if ($longueur < 2)
            throw new Exception('Votre nom est trop court');
        if ($longueur > 25)
            throw new Exception('Votre nom est trop longue');
        $this->nom = $name;
    }

    /**
     * GETTER
     */
    public function getName(): string
    {
        return $this->nom;
    }
}
