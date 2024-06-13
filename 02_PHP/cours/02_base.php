<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <title>PHP - Introduction</title>
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
                <a class="nav-link " aria-current="page" href="01_index.php">Introduction</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="02_bases.php">Les bases</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="03_variables_constantes.php">Les variables et les constantes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="04_conditions.php">Les conditions en PHP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="05_boucles.php">Les boucles en PHP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="06_inclusions.php">Les importations des fichier</a>
            </li>
            </ul>
        
        </div>
        </div>
    </nav>
    <header class="p5 m-4 bg-light rounded-3 border">
        <section class="container py-5">
            <h1 class="dysplay-5 fw-bold">
                 les bases du PHP
            </h1>
            <p class="col-md-12 fs-4">PHP, ce sigle est un acronyme récursif <span>Préprocesseur hypertexte PHP</span> (PHP Hypertext preprocessor). il s'agit d'un language de scripte serveur open source utilisé pour le dévellopement web dynamique et peut être integrer dans des codes HTML, notez bien qu'un navigateur ne comprend pas le PHP</p>
        </section>
    </header>

    <main class="container-fluid px-5">

    <div class="row border p-5 mt-5">
        <div class="col-sm-12 col-md-6">
            <h2>
                1-Les balise PHP
            </h2>
            <p>Pour ouvrire un passage en PHP on utillise la balise dans un <span class="fw-bold"><code>&lt;?PHP</code></span></p>
            <p>Pour fermer un passage en PHP on utillise la balise dans un <span class="fw-bold"><code>?></code></span></p>
            <p>
                exemple
                <strong>
                    <code>
                        &lt;?PHP
                        code PHP
                        ?>
                    </code>
                </strong>
            </p>
        </div>
        <div class="col-sm-12 col-md-6">
            <h2>
               2- Les commentaire en PHP
            </h2>
            <p>pour faire les commentaire en php</p>
            <ul>
                <li>// mon commentaire</li>
                <li>#mon commmentaire</li>
            </ul>
            <?php

            // un premier commentaire
            # un deuxieme commentaire 

            ?>
            <p>pour faire les commentaire sur plusieur ligne on utillise</p>
            <ul>
                <li>
                    <em>
                        /*
                        commentaire 
                        en 
                        plusieur 
                        ligne
                        */
                    </em>
                </li>
            </ul>
            <?php

                /*
                exemple de
                commentaire sur plusieurs 
                lignes
                 */

            ?>
        </div>
    </div>

    </main>
    
    <footer>
        <div class="d-flex justify-content-evenly align-items-center bg-dark text-white p-3">
        <a class="nav-link" target="_blank" href="https://www.php.net/manual/fr/langref.php">Doc PHP</a>
        <a class="nav-link" href="01_index.php"><img src="assets/img/logo.png" alt="logo php"></a>
        <a class="nav-link" target="_blank" href="https://devdocs.io/php/">DevDocs</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>