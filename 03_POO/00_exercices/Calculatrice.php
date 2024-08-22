<?php

require_once "../inc/function.inc.php";

class Calculatrice
{


    /**
     * addition
     *
     * @param integer $nbr
     * @param integer $nbr2
     * @return integer la somme
     */
    public function ajouterArticle(int $nbr, int $nbr2): int
    {

        return $nbr + $nbr2;
    }


    /**
     * division
     *
     * @param float $nbr
     * @param float $nbr2
     * @return mixed
     */
    public function diviserArticle(float $nbr, float $nbr2): mixed
    {

        if ($nbr2 == 0) {
            
            return "false";
        }
        return  $nbr / $nbr2;
    }
}


$resultat_1 = new Calculatrice();

$addition = $resultat_1->ajouterArticle(10, 205) ;
echo $addition. "<br>";

$division = $resultat_1->diviserArticle(500, 8) ;
echo $division;


