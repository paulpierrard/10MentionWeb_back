<?php

require_once "../inc/function.inc.php";

class JeuVideo{

    /**
     * Le nom du jeu
     *
     * @var string
     */
    private string $nomDuJeu;

    /**
     * Le model de la console 
     *
     * @var string
     */
    private string $console;

    /**
     * Le prix du jeu
     *
     * @var string
     */
    private float $prix;

    /** 
    * Le constructeur est une méthode spéciale dans une classe, définie avec le nom __construct().
     * Elle est utilisée pour initialiser les propriétés de l'objet lors de sa création.
     * En PHP, il s'agit d'une méthode magique, ce qui signifie qu'elle est automatiquement appelée lors de l'instanciation de la classe.
     * Il est important de noter qu'une classe ne peut avoir qu'un seul constructeur en PHP.
     */

    /**
     * Undocumented function
     *
     * @param string $n Le nom du jeux 
     * @param string $c le model de la console
     * @param float $p le prix du jeux
     */
    public function __construct(string $n, string $c, float $p){

        // Initialisation des propriete de l'objet avec les valeurs fournies lors de l'instanciation
        $this->nomDuJeu = $n;
        $this->console = $c;
        $this->prix = $p;

        
    }

    public function getNomDuJeu() : string{

        return $this->nomDuJeu;
         
    }
    public function getConsole() : string{

        return $this->console;
         
    }
    public function getPrix() : float{

        return $this->prix;
         
    }

    /**
     * details
     *
     * @return void
     */
    public function aficheDetails(){
        return "<p>jeu : {$this->nomDuJeu}, console : {$this->console}, prix : {$this->prix}€</p>";
    }
}
//initialisation des propriété
$jeu_1 = new JeuVideo("Street Fighter 6", "PS4" , 69.99);
debug($jeu_1);
$jeu_2 = new JeuVideo("Diablo IV", "PS5" , 75.99);
debug($jeu_2);

echo $jeu_1->aficheDetails();
echo $jeu_2->aficheDetails();