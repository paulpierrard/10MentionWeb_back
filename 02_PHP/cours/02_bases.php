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
        <div class="col-sm-12">
            <h2>
                3-Extentions".php" vs ".html"
            </h2>
            <p>
                En dehors des balises PHP, il;est possible d'écrire du code HTML dans fichier ayant l'extension 
                            .php, ce qui n'est pas possible dans un fichier .html. Cela est dû au fait que les fichiers .php sont traités par le serveur en tant que code PHP et peuvent in clure des instruction PHP et HTML, tandis que les fichiers .html ne sont pas traités comme du code PHP.
            </p>
            <p>
                Si notre fichier PHP ne contient que des scripts PHP, nous ne sommes pas obligés de fermer la balise PHP à la fin script, cependant, il est recommandé de le faire pour éviter tout problème potentiel avec l'affichage de contenu HTML des erreurs de syntaxe si vous ajoutez du code HTML après les instructions  PHP dans le même fichier. De plus, certaistandars de codage et bonnes pratique recommandent de fermer toutes les balises PHP pour une meilleure lisibilité maintenabilité du code
            </p>
        </div>
        <div class="col-sm-12">
            <h2>4-affichage</h2>
            <p>Pour afficher du text sur notre page à partir d'un scripte php on peut utiliser </p>
            <ul>
                <li>
                    L'instruction <span>echo</span> : permet d'effectuer un affichage.nous pouvons y metre du html
                </li>
                <div class="alert alert-primary w-50">
                    <?php
                    echo "Je suis un text en PHP dans une instruction echo";
                    ?>
                </div>
                <li>
                    L'instruction <span>print</span> : c'est une instruction d'affichage . nous pouvon y mettre du HTML
                </li>
                <div class="alert alert-primary w-50">
                    <?php
                        print "Je suis un text en PHP dans une instruction <span>print</span>"
                    ?>
                </div>
                <li>
                    Les instruction <span>var_dump()</span> et <span>print_r</span> : permette d'afficher du contenue mais on s'en servira principalement pour debuger. Ces deux fonctions permettent d'analyser dans le navigateur le conteunu d'une variables par exemple (nous verrons l'utilsation plus tard)
                </li>
            </ul>
        </div>
        <div class="col-sm-12">
            <h2>5-concatènation</h2>
            <p>En php on concatène avec le <span>.</span>(point)</p>
            <p>Dans une première </p>
        </div>
        <div class="col-sm-12">
            <h2>6-Les variables utiliateurs</h2>
            <p>Une variable est un espace mémoire qui porte un nom et qui permet de conserver une valeur. Cette valeur peut être de n'importe quel type.</p>
                <p>Chaque variable posséde un identifiant particulier qui commence toujours per le caractère dollar <span>$</span>.</p>
                <p>Ce caractère est suivi du nom de la variable. Il existe des règles de nommage des variables en PHP :</p>
                <ul>
                    <li>Par convention un nom de variable commence par une miniscule puis on met une majuscule à chaque mot</li>
                    <li>Le nom commence par un caractère alphabétique, pris dans les ennsembles [A_Z] ou [a_z] ou un underscore <span>_</span>(à éviter car en PHP existe des variables prédéfinies et qui commencent par le underscore)</li>
                    <li>Les caractères qui suivent peuvent être les mêmes avec en plus l'ensemble [0_9] (jamais au début)</li>
                    <li>La longeur du nom de notre variable n'est pas limitée mais il convient d'être raisonnable. Il est conseillé d'avoir des noms de variable le plus parlant possible. Par exemple <span>$nomClient</span> est plus parlant que <span>$x</span>.</li>
                    <li>Les noms de variables sont sensibmles à la casse : <span>$mavar</span> et <span>$maVar</span> ne seront pas les mêmes variables.</li>
                </ul>
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-4 me-5 alert alert-success">
                        <p>Les nom de variables suivant sont corrects :</p>
                        <ul>
                            <li><span>$mavar</span></li>
                            <li><span>$_mavar</span></li>
                            <li><span>$mavar2</span></li>
                            <li><span>$M2</span></li>
                            <li><span>$_123</span></li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-4 me-5 alert alert-danger">
                        <p>Les nom de variables suivant sont interdit :</p>
                        <ul>
                            <li><span>$*mavar</span></li>
                            <li><span>$5_mavar</span></li>
                            <li><span>$mavar2+</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12">
                    <h2>7-affectation des variables utilisateurs </h2>
                    <p>afecter une variable consiste a lui donner une valeur : l'orsque vous déclarer une variable vous ne lui donnez pas de type c'est la valeur que vous lui affecter qui vas determiner son type </p>
                    <ul>
                        <li><span>$maVar1 = 75; => integer </span></li>
                        <li><span>$maVar2 = "paris"; => string</span></li>
                        <li><span>$maVar3 = 12.5; => double</span></li>
                        <li><span>$maVar4 = true; => boolean</span></li>
                    </ul>
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