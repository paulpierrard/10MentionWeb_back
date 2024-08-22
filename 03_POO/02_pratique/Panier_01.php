<?php

require_once "../inc/function.inc.php";
/**
 * En programmation, Une classe permet de regrouper des données (attributs / propriétés) et des comportements (méthodes).
 * Pour obtenir un objet, il faut demander au langage de le créer et de nous le donner pour qu’on puisse le manipuler. Pour faire ça, on précise au langage le nom de l’élément que l’on veut manipuler, c’est-à-dire la classe.
 * Une classe permet de produire plusieurs objets. Par convention, une classe sera nommée avec la première lettre en MAJUSCULE.
 * La classe représente un modèle de données qui définit la structure commune à tous les objets créés à partir de celle-ci. La classe constitue donc une sorte de moule à travers lequel plusieurs objets du même type et de même structure peuvent être créés.
 * Une classe représente une entité (le modèle qu'elle doit suivre) ; elle a ses services (= méthodes : ce qu'elle propose et ce qu'elle permet de faire) et elle a les attributs (= propriétés : ses spécificités).
 * 
 * Pour en savoir plus : 
 * - https://blog.hubspot.fr/website/programmation-orientee-objet#:~:text=La%20programmation%20orient%C3%A9e%20objet%2C%20ou,des%20instances%20individuelles%20d'objets.
 * 
 * Pour définir et créer une classe, on utilise le mot-clé class suivi du nom de la classe (avec une lettre majuscule au début et à chaque début d'un nouveau mot dans le nom de la classe).
 */

//////////////////////////////////////////////

/** Classe repersentant un pagnier d'articles */

class Panier
{

    // une propriété (ou attribut) => une variable appartenant à une classe 
    // une méthode => une fonction appartenant à une classe

    // les annotations sont très utiles pour les outils de développement et les environnements de développement intégré (IDE), elles ne sont pas obligatoires en PHP.
    // En programmation, un docblock ou DocBlock est un commentaire spécialement formaté spécifié dans le code source qui est utilisé pour documenter un segment de code spécifique

    // L'annotation @var est utilisée dans les commentaires de documentation (DocBlock) en PHP pour indiquer le type de donnée associé à une variable. Elle est souvent utilisée pour documenter les propriétés d'une classe, les variables dans des fonctions ou méthodes, ou même des variables dans le code, afin de clarifier le type attendu ou utilisé.

    /**
     * @var int Nombre de produit dans le Panier
     */

    public int $nbrProduits; // c'est une propriété dans la classe Panier 


    /**
     * @return string Un message indicant que l'article a été ajouté 
     */
    public function ajouterArticle(): string
    {

        return "l'article a été ajoué"; // traitement

    }

    /**
     * @return string Un message indicant que l'article a été retirer 
     */
    public function retirerArticle(): string
    {

        return "l'article a été retirer"; // traitement

    }

    // onpeut declarer des methodes avec des pramètres

    /**
     * Retourne le nombre d'articles dans le panier
     * @param int $nbr le nombre d'article a définire (par defaut 10)
     * @return string Un message indiquant le nombre d'articles dans le panier
     */

    // L'annotation @param est utilisée dans les commentaires de documentation (DocBlock) en PHP pour décrire les paramètres d'une fonction ou d'une méthode,  on y trouve : le type, le nom et une brève description (facultatif) du rôle de chaque paramètre attendu par la fonction ou la méthode

    // L'annotation @return est utilisée dans les commentaires de documentation (DocBlock) en PHP pour indiquer le type de valeur qu'une fonction ou une méthode renvoie.

    public function nombreArticle(int $nbr = 10)
    { // nombreArticle() retourne par default un message avec 10 articles si aucun paramètre n'est passé

        return "Il y a $nbr article(s) dans le panier";
    }
}


$panier_1 = new Panier(); // instanciation de la classe : on instancie ou on cree une instance de norte classe panier , on la stock dans un objet , cela permet de passer une classe à l'objet

//Panier c'est le modèle, $panier_1 est une vertion correcte de ce modèle
//new : mot-clé permettant d'effectuer une instanciation

debug($panier_1); // afiche la valeur de la proprierte dans l'objet , type(objet), nom de la classe et réference de l'objet

debug(get_class_methods($panier_1)); // cette méthode permet d'obtenir une liste des méthodes d'une classe donnée. Elle renvoie un tableau contenant les noms de toutes les les classe public de la classe spécifiee, y compris celle héritees des classes parents

$panier_1->nbrProduits = 5; // on accéde à la propriété $nbrProduits grâce à la flèche "->" appeler "opérateur objet"et on lui donne une valeur définie

debug($panier_1);

echo "<p> Il y a {$panier_1->nbrProduits} article(s) dans le panier </p>";
echo $panier_1->ajouterArticle() . "<br>";
echo $panier_1->retirerArticle() . "<br>";
echo $panier_1->nombreArticle() . "<br>";

///////////////////////////////////////////////////////////////////////////////

$panier_2 = new Panier();

debug($panier_2);

unset($panier_1); // pour détruire un objet

// debug($panier_1);// affiche Undefined variable $panier_1 

// on instancie un troisième objet et on le stock dans la vriable $panier_3

$panier_3 = new Panier();

debug($panier_3); // ici le nouvel objet $panier_3 a pris la pace de $panier_1

///////////////////////////////////

$panier_4 = new Panier();

debug($panier_4);

/**
 * Une fois créés, les objets sont indépendants et ont chacun leurs propriétés ; ils ont tous accès aux méthodes déclarées dans la classe.
 * Toutes les informations déclarées publiques dans une classe seront accessibles depuis l'extérieur de cette classe.
 */
