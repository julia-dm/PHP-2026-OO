<?php

// La classe PARENTE : ce que TOUS les animaux ont en commun
abstract class Animal
{
    protected ?string $nom = null;

    public function __construct(string $name = "Anonyme")
    {
        $this->nom = $name;
    }

    public  function manger()
    {
      return $this->nom . ' mange.';
    }


    abstract public function crier(): string;
}
