<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description">
    <meta name="author" content="Paul PIERRARD">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="<?=RACINE_SITE?>assets/css/style.css">
</head>

<body>

    <header>

        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <h1><a class="navbar-brand" href="#">Movies</a></h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav w-100 d-flex justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?=RACINE_SITE?>index.php">Accueil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Catégories
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">sci fi</a></li>
                                <li><a class="dropdown-item" href="#">Aventure</a></li>
                            </ul>
                        </li>

                        <?php

                        if (empty($_SESSION['user'])) {

                        ?>

                            <li class="nav-item">
                                <a class="nav-link" href="<?=RACINE_SITE?>register.php">Inscription</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=RACINE_SITE?>authentification.php">Conexion</a>
                            </li>

                        <?php

                        } else {

                        ?>

                            <li class="nav-item">
                                <a class="nav-link" href="<?=RACINE_SITE?>profil.php">Compte de <span class="badge rounded-pill text-bg-danger"><?=$_SESSION['user']['firstName']?></span></a>
                            </li>

                            <?php

                            if ($_SESSION['user']['role'] === "ROLE_ADMIN") {

                            ?>

                                <li class="nav-item">
                                    <a class="nav-link" href="<?=RACINE_SITE?>admin/gestion_film.php">Back office</a>
                                </li>

                            <?php

                            }

                            ?>

                            <li class="nav-item">
                                <a class="nav-link" href="?action=deconnexion">Déconexion</a>
                            </li>

                        <?php
                    

                        }

                        ?>




                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-cart fs-2"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>