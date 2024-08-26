<?php
class Personne {
     
    /**
     * le nom de l'animal
     *
     * @var string
     */
    protected string $nom;

    /**
     * constuct
     *
     * @param string $n
     */
    public function __construct($n)
    {

        $this->nom = $n;
    }

    /**
     * Méthode protegée pour obtenir une description générique de l'animal
     *
     * @return void
     */
    protected function afficheNom() {

        return $this->nom;
        
    }

}

class Etudiant extends Personne {

    /**
     * L'âge de l'etudiant
     *
     * @var integer
     */
    private int $age;

    public function __construct($nom, $age)
    {

        parent::__construct($nom); // Appel du constructeur de la classe de base parent (personne) depuis la class enfant

        $this->age = $age;
        
    }

    public function affiche(){
        
        return $this->afficheNom(). " à " . $this->age . " ans ";
    }

}

$etudiant1 = new  Etudiant("Spartak" , 29);

echo $etudiant1->affiche();


