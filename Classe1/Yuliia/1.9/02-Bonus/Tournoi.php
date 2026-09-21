<?php 
interface Combattant
{
    public function attaquer(Combattant $cible): void;
    public function recevoirDegats(int $degats): void;
    public function estVivant(): bool;
    public function getNom(): string;
}

class Tournoi{

function duel(Combattant $a, Combattant $b): void
{
    while ($a->estVivant() && $b->estVivant()) {
        $a->attaquer($b);
        if ($b->estVivant()) {
            $b->attaquer($a);
        }
    }
}
// duel(new Chevalier('Aria'), new Dragon('Smaug')); → ça marche,
// du moment que Dragon implémente aussi Combattant !
}