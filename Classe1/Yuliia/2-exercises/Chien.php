<?php

class Chien extends Animal
{
    public function crier(): string
    {
        return $this->nom . ' fait : Wouf !';
    }
}
