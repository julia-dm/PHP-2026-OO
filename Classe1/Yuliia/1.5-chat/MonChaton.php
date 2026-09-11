<?php

class MonChaton
{

    // constuctor avec promotion de propriétés 
    public function __construct(
        public string $nom,
        private int $age
    ) {}

    /**
     * GETTER
     */
    // création d'un getter, c'est une méthode publique
    // permettant de récuperer une propriété private ou protected 
    // règlage de nommage get{NomDPropriété} + la propriété avec la première
    // lettre en majiscule
    public function getAge(): int
    {
        // retour de la propriété privée
        return $this->age;
    }

    /**
     * SETTER (Mutator)
     */
    // création d'un getter, c'est une méthode publique
    // permettant de modifier une propriété private ou protected 
    // règlage de nommage get{NomDPropriété} + la propriété avec la première
    // lettre en majiscule
    // Permet de sécuriser les données passée à la propriété privée
    public function setAge(int $i): void
    {
        // si l'age est inférieur à 0 on ne le change pas ( version sans message d'erreurs) et on arrete le scrip avec un return vide (void)
        if ($i < 0) return;
        //erreur non silencieuse
        if ($i > 30) {
            echo "Age trop élevé pour un chat !!!";
            return;
        }

        // on modifie l'age
        $this->age = $i;
    }

    // méthodes
    public function miauler(): string
    {
        return 'Miaou !';
    }
    public function sePresenter(): string
    {
        return 'Je suis ' . $this->nom . ' et j\'ai ' . $this->age . ' ans.';
    }
}
