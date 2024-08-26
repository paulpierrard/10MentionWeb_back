<?php

require_once "../inc/function.inc.php";

class Membre
{

    /**
     * le pseudo du membre
     *
     * @var string
     */
    private string $pseudo;

    /////////////////////////////////////

    /**
     * son mot e passe
     *
     * @var string
     */
    private string $mdp;

    /////////////////////////////////

    /**
     * affectation 
     *
     * @param string $p
     * @param string $m
     */
    public function __construct(string $p, string $m)
    {

        $min = 1;
        $max = 15;

        if (is_string($p) && strlen($p) > $min && strlen($p) < $max) {

            $this->pseudo = $p;
        }

        $this->mdp = $m;
    }

    //////////////////////////////////////

    /**
     * le get
     *
     * @return string
     */
    public function getPseudo(): string
    {

        return $this->pseudo;
    }

    ///////////////////////////////////////////

    /**
     * le get
     *
     * @return string
     */
    public function getMdp(): string
    {
        return $this->mdp;
    }

    ///////////

    /**
     * Undocumented function
     *
     * @return void
     */
    public function aficheDetails()
    {
        return "<p>nom du fruit :{$this->pseudo}, de couleur : {$this->mdp}</p>";
    }
}

///////

//initialisation des propriété
$menbre_1 = new Membre("jd", "Motard77");

debug($menbre_1);

