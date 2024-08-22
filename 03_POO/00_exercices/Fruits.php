<?php

require_once "../inc/function.inc.php";

class Fruits
{

    /**
     * Le nom 
     *
     * @var string
     */
    private string $nom;

    /**
     * couleur 
     *
     * @var string
     */
    private string $couleur;

    /**
     * Undocumented function
     *
     * @param string $n nom
     * @param string $c couleur
     */
    public function __construct(string $n, string $c)
    {

        // Initialisation des propriete de l'objet avec les valeurs fournies lors de l'instanciation
        $this->nom = $n;
        $this->couleur = $c;
    }

    /**
     * recuper le nom
     *
     * @return string
     */
    public function getNom(): string
    {

        return $this->nom;
    }
    /**
     * recupère la couleur
     *
     * @return string
     */
    public function getCouleur(): string
    {

        return $this->couleur;
    }

    /**
     * details
     *
     * @return void
     */
    public function aficheDetails()
    {
        return "<p>nom du fruit :{$this->nom}, de couleur : {$this->couleur}</p>";
    }
}
//initialisation des propriété
$fruit_1 = new Fruits("Fraise", "Rouge");
$fruit_2 = new Fruits("mangue", "jaune");


echo $fruit_1->aficheDetails();
echo $fruit_2->getCouleur() . " ";
echo $fruit_2->getNom();