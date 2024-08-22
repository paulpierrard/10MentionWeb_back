<?php
$title = "Cours - introduction";
require_once "../inc/header.inc.php";

?>

    <div class="p-5 bg-light ">
        <div class="container">
            <h1 class="display-3">POO : Porgrammation Orientée Objet</h1>
            <p class="lead">Théorie</p>
        </div>
    </div>

    <div class="container ">
        <div class="row">
            <div class="col-12 col-md-6 ">
                <h2 class="text-center p-5 text-danger">Historique</h2>
                <p>La notion d'objet a été introduite dans le langage de programmation SImula, en 1962. Cette façon de programmer a évoluée avant d'être popularisée en 1983 avec la sortie du langage C++, un langage orienté objet dont l'utilisation ressemble au langage C.</p>
                <p>Cette nouvelle, à l'époque, façon de programmer répond à plusieurs besoins: </p>
                <ul>
                    <li>Facilitation de changements importants dans le programme</li>
                    <li>Évolution dans les langages, les programmes</li>
                </ul>
                <p>Cette nouvelle façon de programmer va permettre de faire face aux changements majeurs dans un programme qui aurait pu demander de retravailler tout le code. Mais cette nouvelle façon de programmer demande aussi une nouvelle façon de réfléchir. 3 stratégies sont alors à mettre en place :</p>
                <ul>
                    <li>Modélisation différente</li>
                    <li>Modularisation</li>
                    <li>Encapsulation</li>
                </ul>
            </div>
            <div class="col-12 col-md-6 ">
                <h2 class="text-center p-5 text-danger">Les avantages de la POO</h2>
                <strong><p>Le principal avantage de la POO est de faciliter la réutilisation de module. Ainsi, on peut reprendre une classe existante et s'en servir pour définir une nouvelle utilisation.</p></strong>
                <p>Une autre chose facilitée par l'orienté objet est la lecture du code. En effet, on comprendra plus facilement une instruction panier->ajout() plutôt qu'un if else avec de multiples conditions dans une boucle. La force de cette façon de programmer est en fait qu'elle se calque sur la réalité physique du monde. Un objet représente par exemple une voiture. Cet objet, la voiture en l'occurence, aura des comportements et des propriétés.</p>
                <p>En conclusion, les avantages sont :</p>
                <strong>
                    <ul>
                        <li>La facilitation du travail collaboratif</li>
                        <li>Avoir une meilleure organisation et construction des  projets</li>
                        <li>La simplification de la maintenance</li>
                        <li>L'assouplissement du code : offre une grande souplesse pour faire évoluer le projet sans avoir à tout réécrire</li>
                    </ul>
                </strong>
                <p>Cette approche est tout de même moins intuitive que l'approche procédurale. La POO oblige à réfléchir et à modéliser avant de programmer.</p>
            </div>
        </div>
    </div>

    <?php
require_once "../inc/footer.inc.php"
?>



