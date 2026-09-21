<?php
class Chat extends Animal
{
    public function crier(): string
    {
        return $this->nom . ' fait :  Miaou !';
    }
        public function manger(): string
    {
        return parent::manger() . ' Puis il fait sa toilette.';
    }
}
