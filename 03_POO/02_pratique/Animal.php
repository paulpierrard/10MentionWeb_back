<?php

/**
* La visibilité protected est un niveau d'accès intermédiaire qui permet à une propriété ou une méthode d'être accessible uniquement :

    *À l'intérieur de la classe où elle est définie.
    *Dans les classes filles (sous-classes) qui héritent de cette classe.
*/
/**
 * Classe Animal
 *
 * Représente un animal générique avec un nom.
 */


 class Animal {
    
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
    protected function description() {

        return "Ceci est un animal nomee {$this->nom}";
        
    }

    /**
     * le get du nom
     *
     * @return void
     */
    public function getNom() {
        return $this->nom;
    }
 }

/**
 * class Dog qui hérite de la class animal
 */
 class Dog extends Animal{

    public function affichage(): string{
        return $this->nom . "dit wouf!". $this->description();
    }

 }

 $chien = new Dog("Djaba");

 echo $chien->getNom() ."<br>";

 echo $chien->affichage();
