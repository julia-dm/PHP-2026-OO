<?php
class Perroquet extends Animal{

     public function __construct(string $nom, private string $phrase)
    {
        parent::__construct($nom);   // on laisse le parent gérer le nom
    }
    public function crier(): string {
        return  "{$this->nom}: {$this->phrase} Croâ ! {$this->phrase} Croâ !";
    }
}
