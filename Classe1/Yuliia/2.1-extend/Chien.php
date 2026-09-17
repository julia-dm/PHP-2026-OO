<?php
// classe étendue de animal
class Chien extends Animal
{
    // on va écraser la méthode manger()

    public function manger(): string
    {
        // le self devient Chien plutot que Animal
        return "{$this->nom} mange sa classe : " . self::class.", c'est pas bien!!!🫨";
    }
    public function aboyer(): string
    {
        return "{$this->nom} : Wouf !";
    }

     public function crier(): ?string
    {
        return parent::crier()." Par contre le chien peut faire Wouf!!! car il est redéfini dans".self::class;
    }
}


