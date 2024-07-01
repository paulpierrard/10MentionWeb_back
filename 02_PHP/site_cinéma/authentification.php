<?php

require_once "inc/functions.inc.php";
require_once "inc/header.inc.php";

$info = "";



if (!empty($_POST)) {

    // On vérifie si un champ est vide
    $verif = true;
    foreach ($_POST as $key => $value) {

        if (empty(trim($value))) {

            $verif = false;
        }
    }

    if ($verif == false) {

        $info = alert("Veuillez renseigner tout les champs", "danger");
    } else {

        $pseudo = trim($_POST['pseudo']);
        $email = trim($_POST['email']);
        $mdp = $_POST['mdp'];

        // Je vérifie si les données passés dans le formulaire existe dans la BDD , il faut récuperer l'utilisateur de la BDD s'il existe

        $user = checkUser($pseudo, $email);

        if ($user) {

            if (password_verify($mdp, $user['mdp'])) {
                // Je vérifie si le mot de passe est bon
                // password_verify() pour vérifier si un mot de passe correspond à un mot de passe haché créé par la password_hash().
                // Si le hash du mdp de la BDD correspond au $mdp du formulaire, alors password_verify retourne true

                /*  Suite à la connexion on vas crére ce qu'on appelle une session :
                    Principe des sessions : un fichier temporaire appelée "session" est crée sur le serveur, avec un identifiant unique . Les sessions constituent un moyen de stocker les données sur le serveur. Cette session est liée à un internaute car ces données sont propres à ce dernier,  Les données du fichier de session sont accessibles et manipulables à partir de la superglobale $_SESSION, elle est mêmoriser par le serveur et est disponible tant que la session de l'utilsateur est maintenu sur le serveur.
                    Quand une session est créée sur le serveur, ce dernier envoie son identifiant (unique) au client sous forme d'un cookie.
                    un cookie est déposé sur le poste de l'internaute avec l'identifiant (au nom de PHPSESSID). Ce cookie se détruit lorsqu'on quitte le navigateur.
                */
                // Création ou ouverture d'une session :
                // Une variable de session est une variable superglobale du nom de $_SESSION, cest un tableau associatif
                session_start(); // permet de démarrer une nouvelle session ou reprendre une session déjà existante. On utilise une session qiuand cette fonction est exécutée, le serveur vérifie si la sesssion  qui a le m^me identifiant enviyé existe 
                //Ensuite on stock les données dan scette session
                $_SESSION['user'] = $user;
                debug($_SESSION['user']);
            }
        }
    }
}


?>

<main style="background:url(assets/img/5818.png) no-repeat; background-size: cover; background-attachment: fixed;">

    <div class="w-75 m-auto p-5" style="background: rgba(20, 20, 20, 0.9);">
        <h2 class="text-center mb-5 p-3">Se connecter</h2>
        <?php
        debug($_POST);

        echo $info;


        ?>

        <form action="" method="post" class="p-5">
            <div class="row mb-3">
                <div class="col-md-11 mb-5">
                    <label for="pseudo" class="form-label mb-3">Pseudo</label>
                    <input type="text" class="form-control fs-5" id="pseudo" name="pseudo">
                </div>
                <div class="col-md-11 mb-5">
                    <label for="email" class="form-label mb-3">Email</label>
                    <input type="text" class="form-control fs-5" id="email" name="email" placeholder="exemple.email@exemple.com">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-11 mb-5">
                    <label for="mdp" class="form-label mb-3">Mot de passe</label>
                    <input type="password" class="form-control fs-5" id="mdp" name="mdp" placeholder="Entrer votre mot de passe">
                </div>
            </div>
            <div class="row mt-5">
                <button class="w-25 m-auto btn btn-danger btn-lg fs-5" type="submit">Se connecter</button>
                <p class="mt-5 text-center">Vous n'avez pas de compte !<a href="authentification.php" class=" text-danger">Crée un compte</a></p>
            </div>
        </form>
    </div>



</main>



<?php


require_once "inc/footer.inc.php"

?>