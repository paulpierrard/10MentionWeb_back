<?php

require_once "../../inc/function.inc.php";

class Voiture
{

    /**
     * Taille du reservoire 
     *
     * @var integer
     */
    private int $tailleReservoireVoiture;

    /**
     * contenance du reservoire
     *
     * @var float
     */
    private float $nbLitreEssenceVoiture;

    /**
     * le contructe de la class
     *
     * @param integer $t
     * @param float $l
     */
    public function __construct(int $t, float $l)
    {

        $this->setTailleReservoireVoiture($t);
        $this->setNbLitreEssenceVoiture($l);
    }

    /**
     * definir la taille du reservoire
     *
     * @param integer $taille
     * @return void
     */
    public function setTailleReservoireVoiture(int $taille) : void
    {

        $this->tailleReservoireVoiture = $taille;
      
    }

    /**
     * set NbLitreEssenceVoiture
     *
     * @param float $quantite
     * @return void
     */
    public function setNbLitreEssenceVoiture(float $quantite):void
    {

        $this->nbLitreEssenceVoiture = $quantite;
       
    }

    /**
     * Méthode de recupertion
     *
     * @return integer
     */
    public function getTailleReservoireVoiture() : int
    {

        return $this->tailleReservoireVoiture;
    }

    /**
     * Méthode de recupertion
     *
     * @return float
     */
    public function getNbLitreEssenceVoiture() : float
    {

        return $this->nbLitreEssenceVoiture;
    }
}
