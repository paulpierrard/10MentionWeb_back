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

        $this->setPseudo($p);
        $this->mdp = $m;
       
    }

    /////////////////////////////////

    public function setPseudo(string $p): void
    {

        if (!ctype_alpha($p) || strlen($p) < 2 || strlen($p) > 15) {

            $this->pseudo = "pas valide";

        } else {

            $this->pseudo = $p;
        }
    }

    //////////////////////////////////////

    /**
     * le get
     *
     * @return string
     */
    public function getPseudo(): string
    {

        // $p = $this->pseudo;

        // if (strlen($p) < 2 ||  strlen($p) > 15) {

        //     return "Pseudo pas valide";

        // }

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

}

///////

//initialisation des propriété
$menbre_1 = new Membre("j", "Motard77");

echo $menbre_1->getPseudo();
