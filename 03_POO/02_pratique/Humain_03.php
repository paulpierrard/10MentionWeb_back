<?php

require_once "../inc/function.inc.php";


// GETTER ET SETTER
/**
 * une class représentant un humain avec des propriété privées pour le prénom et le nom 
 * les propriéte privées sont accédées et modifier via des méthodes public appeler getter et setter
 */
class Humain
{

    /**
     * le prenom de l'hmain
     *
     * @var string
     */
    private string $prenom;

    /**
     * le nom de l'hmain
     *
     * @var string
     */
    private string $nom;
    /*
    Les propriétés étant 'private', il est nécessaire de passer par des méthodes 'publiques' pour pouvoir lire et écrire ces propriétés.
    On parle de Getter (lire / récupérer) et de Setter (écrire / définir) : ce sont des méthodes qui vont faire la médiation (l'intermédiaire) entre l'extérieur de la classe et ses attributs.    */

    public function setPrenom(string $p): void
    { // par convention on appele la fonction avec le mot clef 'set'

        if (is_string($p)) { // si c'est une chaine de charactère je rentre dans la condition

            // mot clef $this est une "pseudo-variable" , elle va être remplacée par l'objet courrament utilisé. 
            // $this  est créer automatiquement et qui représente l'insctance courante

            $this->prenom = $p; // on assigne la valeur de $p à la propriété 


        }
    }
    public function getPrenom(): string
    {

        return $this->prenom;
    }

    public function setNom(string $n): void
    { 

        if (is_string($n)) { 

            $this->nom = $n; 


        }
    }
    public function getNom(): string
    {

        return $this->nom;
    }
}

$personne_1 = new Humain();

// $personne_1->prenom = "Sahar";
// echo $personne_1->prenom; // accés au ropriété non autorisé

$personne_1->setPrenom("Sahar");
$personne_1->setNom("Ferchichi");

echo "je m'appelle ". $personne_1->getPrenom() . " " . $personne_1->getNom() . "<br>";

///////////////////////////
$personne_2 = new Humain();

$personne_2->setPrenom("Paul");
$personne_2->setNom("Pierrard");

echo "je m'appelle ". $personne_2->getPrenom() . " " . $personne_2->getNom() . "<br>";
///////////////////////////
$personne_3 = new Humain();

$personne_3->setPrenom("Spartak");
$personne_3->setNom("Smbatyan");

echo "je m'appelle ". $personne_3->getPrenom() . " " . $personne_3->getNom() . "<br>";

