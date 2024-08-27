<?php
require_once "../../inc/function.inc.php";
require_once "Product.php";
require_once "Order.php";

use ExoEcommerce\Order;
use ExoEcommerce\Product;
// use ExoEcommerceBis\Order;

$produit1 = new ExoEcommerce\Product("Laptop", 1200); // je peut utioliser c'ette syntaxe si je veut pasc mettre des use dans mon fichier
$produit2 = new Product("Smartphone" , 800);// avec l'utillisation du mot clé use

//creation de la commande : instanciation de la class Order*


$order = new Order(45);

// Ajout des produit à la commande

$order->addProduct($produit1);
$order->addProduct($produit2);



// afficher 

echo "id :{$order->getOrderId()}<br>";

// les produit dans la commandes


debug($order->getProductList());

$toutLesProduit = $order->getProductList();

foreach ($toutLesProduit as  $products) {

    echo "Le produit : {$products->getName()}, coûte : {$products->getPrice()}€ <br>";

}


