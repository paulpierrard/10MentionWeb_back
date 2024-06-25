<!--  fichier qui cotien les fonctions php a utilliser dans notre site  -->

<?php

function debug($var){
    echo '<pre class = "border border-dark bg-light text-primary w-50 p-3">';
        var_dump($var);
    echo '</pre>';
}

#####################################  fonction pour la conection à la BDD  ################################################


// On vas utiliser l'extension PHP Data Objects (PDO), elle définit une excellente interface pour accéder à une base de données depuis PHP et d'exécuter des requêtes SQL .
// Pour se connecter à la BDD avec PDO il faut créer une instance de cet Objet (PDO) qui représente une connexion à la base,  pour cela il faut se servir du constructeur de la classe
// Ce constructeur demande certains paramètres:
// On déclare des constantes d'environnement qui vont contenir les information à la connexion à la BDD

//constante du serveur 
define("DBHOST", "localhost");

// constante de l'utilisateur de la BDD du serveur en local => root

define("DBUSER", "root");

// constante pour le mot de passe de serveur en local => mdp 
define("DBPASS", "");

// constante pour le nom de la BDD
define("DBNAME", "cinema");


function connexionBdd()
{

    // $dsn = "mysql:host=localhost;dbname=cinema,charset=utf8";
    $dsn = "mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=utf8";

    //Grâce à PDP on peut lever une exception (une erreur) si la connexion à la BDD ne se réalise pas(exp: suite à une faute au niveau du nom de la BDD) et par la suite si elle cette erreur est capté on lui demande d'afficher une erreur

    try {

        // dans le try on vas instancier PDO, c'est créer un objet de la classe PDO (un élment de PDO)
        // Sans la variable dsn et les constatntes d'environnement

        $pdo = new PDO($dsn, DBUSER, DBPASS);
        echo "je suis conecetée";
    } catch (PDOException $e) { // PDOException est une classe qui représente une erreur émise par PDO et $e c'est l'objetde la clase en question qui vas stocker cette erre

        die("Erreur : " . $e->getMessage()); // die d'arrêter le PHP et dù ùafficher une erreur en utilisant la méthode getmessage de l'objet $e
    }

    //le catch sera exécuter dès lors on aura un problème da le try

    return $pdo; //ici on utilise un retern car on récupère l'objet de la fonction que l'on vas appelé  dans plusieurs autre fonctions


}




##############################créaion des tables #############################


function createTableCategories()
{

    $cnx = connexionBDD();

    $sql = 'CREATE TABLE IF NOT EXISTS categories (
        id_category INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(50) NOT NULL,
        description TEXT NULL
        )';

    $request = $cnx->exec($sql);
}
// createTableCategories();

function createTableFilms()
{

    $cnx = connexionBdd();

    $sql = " CREATE TABLE IF NOT EXISTS films (
         id_film INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
         category_id INT NOT NULL,
         title VARCHAR(100) NOT NULL,
         director VARCHAR(100) NOT NULL,
         actors VARCHAR(100) NOT NULL,
         ageLimit VARCHAR(5) NULL,
         duration TIME NOT NULL,
         synopsis text NOT NULL,
         date DATE NOT NULL,
         image VARCHAR(250) NOT NULL,
         price Float NOT NULL,
         stock BIGINT NOT NULL
         )";
    $request = $cnx->exec($sql);
}
// createTableFilms();

function createTableUsers()
{

    $cnx = connexionBdd();

    $sql = " CREATE TABLE IF NOT EXISTS users (
         id_user INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
         firstName VARCHAR(50),
         lastName VARCHAR(50) NOT NULL,
         pseudo VARCHAR(50) NOT NULL,
         mdp VARCHAR(255) NOT NULL,
         email VARCHAR(100) NOT NULL,
         phone VARCHAR(30) NOT NULL,
         civility ENUM('f', 'h') NOT NULL,
         birthday date NOT NULL,
         address VARCHAR(50) NOT NULL,
         zip VARCHAR(50) NOT NULL,
         city VARCHAR(50) NOT NULL,
         country VARCHAR(50),
         role ENUM('ROLE_USER','ROLE_ADMIN') DEFAULT 'ROLE_USER' 
         )";
    $request = $cnx->exec($sql);
}

// createTableUsers();

############################# Créations des clés étrangères ########################################

// ALTER TABLE ORDERS ADD FOREIGN KEY (Customer_SID) REFERENCES CUSTOMER (SID);


function foreignKey(string $tableF, string $keyF, string $tableP, string $keyP)
{
    $cnx = connexionBdd();
    $sql = "ALTER TABLE $tableF ADD FOREIGN KEY ($keyF) REFERENCES $tableP ($keyP)";
    $request = $cnx->exec($sql);
}

// création de la clé étrangère dans la table filme 
// foreignKey('films', 'category_id', 'categories', 'id_category');


##################### FONCTION DU CRUD POUR LES UTILISATEUR ###################


// Insription 

function inscriptionUsers(string $lastName, string $firstName, string $pseudo, string $email, string $phone, string $mdp, string $civility, string $birthday, string $address, string $zip, string $city, string $country)
{

    // Les requêtes préparer sont préconisées si vous exécutez plusieurs fois la même requête. Ainsi vous évitez au SGBD de répéter toutes les phases analyse/ interpretation / exécution de la requête (gain de performance). Les requêtes préparées sont aussi utilisées pour nettoyer les données et se prémunir des injections de type SQL.

    // 1- On prépare la requête
    // 2- On lie le marqueur à la reqête 
    // 3- On exécute la requête  

    $cnx = connexionBdd();

    $sql = "INSERT INTO users (lastName , firstName , pseudo , email, phone, mdp , civility , birthday , address , zip ,city , country) VALUE (:lastName , :firstName , :pseudo , :email, :phone, :mdp , :civility , :birthday , :address , :zip ,:city , :country)  ";

    $request = $cnx->prepare($sql); //prepare() est une méthode qui permet de préparer la requête sans l'exécuter. Elle contient un marqueur :nom qui est vide et attend une valeur.
    //$requet est à cette ligne  encore un objet PDOstatement .

    $request->execute(array(
        ":lastName" => $lastName,
        ":firstName" => $firstName,
        ":pseudo" => $pseudo,
        ":email" => $email,
        ":phone" => $phone,
        ":mdp" => $mdp,
        ":civility" => $civility,
        ":birthday" => $birthday,
        ":address" => $address,
        ":zip" => $zip,
        ":city" => $city,
        ":country" => $country
    )); // execute permet s'executer toute la requette

}

// inscriptionUsers();

?>