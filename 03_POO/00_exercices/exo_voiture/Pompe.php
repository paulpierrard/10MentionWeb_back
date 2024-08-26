<?php

require_once "../../inc/function.inc.php";

class Pompe
{

    /**
     * Taille du reservoire 
     *
     * @var integer
     */
    private int $tailleReservoirePompe;

    /**
     * contenance du reservoire
     *
     * @var float
     */
    private float $nbLitreEssencePompe;

    /**
     * le contructe de la class
     *
     * @param integer $t
     * @param float $l
     */
    public function __construct(int $t, float $l)
    {

        $this->setTailleReservoirePompe($t);
        $this->setNbLitreEssencePompe($l);
    }

    /**
     * definir la taille du reservoir
     *
     * @param integer $taille
     * @return void
     */
    public function setTailleReservoirePompe(int $taille): void
    {

        $this->tailleReservoirePompe = $taille;
    }

    /**
     * set NbLitreEssencePompe
     *
     * @param float $quantite
     * @return void
     */
    public function setNbLitreEssencePompe(float $quantite): void
    {

        $this->nbLitreEssencePompe = $quantite;
    }

    /**
     * Méthode de recupertion
     *
     * @return integer
     */
    public function getTailleReservoirePompe(): int
    {

        return $this->tailleReservoirePompe;
    }

    /**
     * Méthode de recupertion
     *
     * @return float
     */
    public function getNbLitreEssencePompe(): float
    {

        return $this->nbLitreEssencePompe;
    }

    public function delivrerEssence(Voiture $v)
    {

        $quantite_a_delivrer = $v->getTailleReservoireVoiture() - $v->getNbLitreEssenceVoiture();

        if ($quantite_a_delivrer > $this->getNbLitreEssencePompe()) {

            $quantite_a_delivrer = $this->getNbLitreEssencePompe();
        };
        $v->setNbLitreEssenceVoiture($v->getNbLitreEssenceVoiture() + $quantite_a_delivrer);

        $this->setNbLitreEssencePompe($this->getNbLitreEssencePompe() - $quantite_a_delivrer);

        return "<p>vous avez consommer $quantite_a_delivrer L</p>";
    }

    // si la     quantiter a delivrer est supèrieur à ce que la pompe a ajuster la quantité à ce qui reste 




}

