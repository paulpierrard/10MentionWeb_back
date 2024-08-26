<?php

require_once "Pompe.php";
require_once "Voiture.php";

$voiture = new Voiture(50,5);
$pompe = new Pompe(800 , 800);

// Départ


echo "<p>taille du reservoire ".$voiture->getTailleReservoireVoiture()." et il y a {$voiture->getNbLitreEssenceVoiture()} litre dans la voiture</p>";

echo "<p>la pompe contient {$pompe->getNbLitreEssencePompe()} litre , et sa contenance est de {$pompe->getTailleReservoirePompe()} ";

echo $pompe->delivrerEssence($voiture);

/////////////
echo "<p>taille du reservoire ".$voiture->getTailleReservoireVoiture()." et il y a {$voiture->getNbLitreEssenceVoiture()} litre dans la voiture</p>";

echo "<p>la pompe contient {$pompe->getNbLitreEssencePompe()} litre , et sa contenance est de {$pompe->getTailleReservoirePompe()} ";