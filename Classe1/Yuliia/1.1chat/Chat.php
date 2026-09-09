<?php

class Chat{
    // propriétés
    public string $nom='Sans nom';
    public int $age=0;

        public function miauler(): string
    {
        return 'Miaou !';
    }
    public function sePresenter(): string
    {
        return 'Je suis ' . $this->nom . ' et j\'ai ' . $this->age . ' ans.';
    }
   
    
}