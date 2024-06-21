<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <title><?= $titre ?></title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg" >
        <div class="container-fluid">
        <a class="navbar-brand" href="01_index.php"><img src="assets/img/logo.png" alt="logo php"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="01_index.php" target="_blank">Introduction</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="02_bases.php" target="_blank">Bases PHP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="03_variables_constantes.php" target="_blank">Variables et constantes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="04_conditions.php" target="_blank">Conditions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="05_boucles.php" target="_blank">Boucles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="06_inclusions.php" target="_blank">Importation de fichers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="07_tableaux.php" target="_blank">Tableaux</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="08_fonctions.php" target="_blank">Fonctions</a>
                </li>
            </ul>
        
        </div>
        </div>
    </nav>

    <header class="p5 m-4 bg-light rounded-3 border">
        <section class="container py-5">
            <h1><?= $leh1 ?></h1>
            <p><?= $text ?></p>
        </section>
    </header>

    