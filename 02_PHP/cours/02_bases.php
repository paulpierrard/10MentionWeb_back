<?php 
$titre = "Les bases en PHP";
$leh1 = "Les bases du PHP";
$text = "PHP, ce sigle est un acronyme récursif <span>Préprocesseur hypertexte PHP</span> (PHP Hypertext preprocessor). il s'agit d'un language de scripte serveur open source utilisé pour le dévellopement web dynamique et peut être integrer dans des codes HTML, notez bien qu'un navigateur ne comprend pas le PHP";
/*<!-- ceci est mon header include */
include_once "inc/header.inc.php" ;
?>


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
                <div class="col-sm-12">
                <h2>8 - Les opérateurs  numériques </h2>
                
                <table  class="table table-dark table-hover table-bordered">
                    <thead>
                    <tr>
                            <th scope="col">Opérateur</th>
                            <th scope="col">Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                            <th scope="row">+</th>
                            <td>Addition</td>
                    </tr>
                    <tr>
                            <th scope="row">-</th>
                            <td>Soustraction</td>
                    </tr>
                    <tr>
                            <th scope="row">*</th>
                            <td>Multiplication</td>
                    </tr>
                    <tr>
                            <th scope="row">**</th>
                            <td>Puissance (associatif à droite)</td>
                    </tr>
                    <tr>
                            <th scope="row">/</th>
                            <td>Division</td>
                    </tr>
                    <tr>
                            <th scope="row">%</th>
                            <td>Modulo : reste de la division du premier opérande par le deuxième. Fonctionne aussi avec
                                des
                                opérandes décimaux. Dans ce cas, PHP ne tient compte que des parties entières de chacun
                                des
                                opérandes.</td>
                    </tr>
                    <tr>
                            <th scope="row">--</th>
                            <td>Décrémentation : soustrait une unité à la variable. Il existe deux possibilités, la
                                prédécrémentation, qui soustrait avant d'utiliser la variable, et la postdécrémentation,
                                qui
                                soustrait après avoir utilisé la variable.</td>
                    </tr>
                    <tr>
                            <th scope="row">++</th>
                            <td>Incrémentation : ajoute une unité à la variable. Il existe deux possibilités, la
                                préincrémentation, qui ajoute 1 avant d'utiliser la variable, et la postincrémentation,
                                qui
                                ajoute 1 après avoir utilisé la variable. </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-12">
                <h2>9- Les opérateurs d'affectation combinés numèrique</h2>
                <p>En plus de l'opérateur classique d'affectation (=), il existe plusieurs opérateurs d'affectation
                        combinés. Ces opérateurs réalisent à la fois une opération entre deux opérandes et l'affectation du
                        résultat à l'opérande de gauche.</p>
                <table  class="table table-dark table-hover table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Opérateur</th>
                            <th scope="col">Description</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">+=</th>
                            <td>Addition puis affectation :<br>
                                $x += $y équivaut à $x = $x + $y<br>
                                $y peut être une expression complexe dont la valeur est un nombre.</td>
                        </tr>
                        <tr>
                            <th scope="row">-=</th>
                            <td>Soustraction puis affectation :<br>
                                $x -= $y équivaut à $x = $x - $y<br>
                                $y peut être une expression complexe dont la valeur est un nombre.</td>
                        </tr>
                        <tr>
                            <th scope="row">*=</th>
                            <td>Multiplication puis affectation :<br>
                                $x *= $y équivaut à $x = $x * $y<br>
                                $y peut être une expression complexe dont la valeur est un nombre.</td>
                        </tr>
                        <tr>
                            <th scope="row">**=</th>
                            <td>Puissance puis affectation<br>
                                $x**=2 équivaut à $x=($x)²</td>
                        </tr>
                        <tr>
                            <th scope="row">/=</th>
                            <td>Division puis affectation :<br>
                                $x /= $y équivaut à $x = $x / $y<br>
                                $y peut être une expression complexe dont la valeur est un nombre différent de 0.</td>
                        </tr>
                        <tr>
                            <th scope="row">%=</th>
                            <td>Modulo puis affectation :<br>
                                $x %= $y équivaut à $x = $x % $y $y<br>
                                $y peut être une expression complexe dont la valeur est un nombre.</td>
                        </tr>
                        <tr>
                            <th scope="row">.=</th>
                            <td>Concaténation puis affectation :<br>
                                $x .= $y équivaut à $x = $x . $y<br>
                                $y peut être une expression littérale dont la valeur est une chaîne de caractères.</td>
                        </tr>
                        </tbody>
                </table>
            </div>
            <div class="col-sm-12">
                <h2>10 - Les variables prédéfinies</h2>
                <p>PHP propose toute une série de variables qui sont déjà présentes dans le langage sans que vous n'ayez à les déclarer et  accessibles à tous vos scripts. Ces variables s'écrivent toujours en majuscules et nous fournissent divers renseignements.</p>
                <p>Nous allons voir Les variables <span>Super-globales</span> qui sont des variables prédéfinies internes et sont toujours disponibles, quelque soit le contexte.</p>
                <p> Il est inutile de faire <span>global $variable;</span> avant d'y accéder dans les fonctions ou les méthodes.</p>
                <table class="table table-dark table-hover table-bordered">
                    <thead>
                        <tr>
                                <th>Super-globale</th>
                                <th>Utilisation</th>
                        </tr>
                    </thead>
                    <tbody>
                    <!-- tr*9>td*2 -->
                        <tr>
                            <td>$GLOBALS</td>
                            <td>Elle contient le nom et la valeur de toutes les variables du script. Les noms de
                                variables sont les clés du tableau qui est renvoyé par cette variable. Pour appeler une
                                variable en particulier : <code>$GLOBALS["nomvariable"]</code>. Ce code permet de
                                récupérer la valeur de la variable en dehors de sa zone de visibilité. </td>
                        </tr>
                        <tr>
                            <td>$_COOKIE</td>
                            <td>Contient le nom et la valeur des cookies enregistrés sur le poste client. Comme pour
                                $GLOBALS, le clés de ce tableau sont les noms des cookies.</td>
                        </tr>
                        <tr>
                            <td>$_ENV</td>
                            <td>Contient le nom et la valeur de toutes les variables d'environnement qui changent selon
                                le serveur utilisé. </td>
                        </tr>
                        <tr>
                            <td>$_GET</td>
                            <td>Elle contient les informations passées à travers un url ou un formulaire ayant la méthod
                                GET. Dans ce cas, les clés du tableau sont le name des champs du formulaire.</td>
                        </tr>
                        <tr>
                            <td>$_POST</td>
                            <td>Contient le nom et la valeur des données issues d'un formulaire envoyé par la method
                                POST. Comme pour $_GET c'est le name des input qui sera la clé du tableau. </td>
                        </tr>
                        <tr>
                            <td>$_REQUEST</td>
                            <td>Contient l'ensemble des de ces variables : $_GET, $_POST, $_COOKIE, $_FILES</td>
                        </tr>
                        <tr>
                            <td>$_SERVER</td>
                            <td>Contient les informations liées au serveur web, tel le contenu des en-têtes HTTP ou le nom du script en cours d'exécution. Retenons les variables suivantes :
                                <ul>
                                    <li><code>$_SERVER["HTTP_ACCEPT_LANGUAGE"]</code>, qui contient le code de langue du
                                        navigateur client.</li>
                                    <li><code>$_SERVER["HTTP_COOKIE"]</code>, qui contient le nom et la valeur des
                                        cookies lus
                                        sur
                                        le poste client.</li>
                                    <li><code>$_SERVER["HTTP_HOST"]</code>, qui donne le nom de domaine.</li>
                                    <li><code>$_SERVER["SERVER_ADDR"]</code>, qui indique l'adresse IP du serveur.</li>
                                    <li><code>$_SERVER["PHP_SELF"]</code>, qui contient le nom du script en cours. Nous
                                        l'utiliserons souvent dans les formulaires.</li>
                                    <li><code>$_SERVER["QUERY_STRING"]</code>, qui contient la chaîne de la requête
                                        utilisée
                                        pour accéder au script.
                            </td>
                        </tr>
                        <tr>
                            <td>$_SESSION</td>
                            <td>Contient l'ensemble de nom de variables de session et leur valeur</td>
                        </tr>
                        <tr>
                            <td>$_FILES</td>
                            <td>Contient le nom des fichiers téléchargés.</td>
                        </tr>
                    </tbody>
                </table>      
            </div>
            <div class="col-sm-12">
                <h2>11 - Les constantes utilisteurs</h2>
                <p>Une constante permet de conserver une valeur suaf que celle-ci ne peut pas changer. C'est à dire qu'on ne pourrapas la modifier durant l'éxécution duc script. Utile par exemple pour conserver les parametres de connexion à la BDD de façon certaine. </p>
                <p>Le constantes sont sensible à la casse. Par convention une constante s'écrit toujours en MAJUSCULE</p>
                <p>Pour définir une constante on utilise la fonction <span>define()</span> dont la syntaxe sera la suivante: 
                                <code>define("NOMCONSTANTE","Valeur constante");</code> (ex : voir code VS code)
                </p>
                <div class="alert alert-primary w-25">
                                <?php
                                    define('CAPITALE_FRANCE', 'Paris'); // Ici on déclare la constante CAPITALE_FRANCE à laquelle on affecte 'Paris'
                                    echo CAPITALE_FRANCE; //affiche paris
                                    
                                
                                ?>
                </div>
                
            </div>
            <div class="col-sm-12">
                    <h2>12 - Constantes prédéfinies   </h2>
                    <p>Il existe en PHP un grand nombre de constantes prédéfinies que nous pouvons notamment utiliser dans les fonctions comme paramètres permettant de définr des options.</p>
                    <p>Nous allons voir <span>Les Constantes magiques</span> .</p>
                    <table class="table table-dark table-hover table-bordered">
                         <thead>
                              <tr>
                                   <th scope="col">Constantes</th>
                                   <th scope="col">Résultat</th>
                              </tr>
                         </thead>
                         <tbody>
                              <tr>
                                   <th scope="row">PHP_VERSION</th>
                                   <td>Version de PHP installé sur le serveur</td>
                              </tr>
                              <tr>
                                   <th scope="row">PHP_OS</th>
                                   <td>Nom du système d'exploitation du serveur</td>
                              </tr>
                              <tr>
                                   <th scope="row">DEFAULT_INCLUDE_PATH</th>
                                   <td>Chemin d'accès aux fichiers par défaut </td>
                              </tr>
                              <tr>
                                   <th scope="row">__FILE__</th>
                                   <td>Nom du fichier en cours d'exécution</td>
                              </tr>
                              <tr>
                                   <th scope="row">__DIR__</th>
                                   <td>Le dossier du fichier</td>
                              </tr>
                              <tr>
                                   <th scope="row">__LINE__</th>
                                   <td>Numéro de la ligne en cours d'exécution</td>
                              </tr>
                         </tbody>
                    </table>
               </div>
               <div class="col-sm-12">
                    <h2>13 - Les opérateurs booléens</h2>
                    <p>Quand ils sont associés, les opérateurs booléens servent à écrire des expressions simples ou complexes, qui sont évaluées par une valeur booléenne TRUE ou FALSE. Ces valeurs seront utilisées dans les instructions conditionnelles.</p>
                    <table class="table table-dark table-hover table-bordered">
                         <thead>
                         <tr>
                              <th scope="col">Opérateur</th>
                              <th scope="col">Description</th>
                         </tr>
                         </thead>
                         <tbody>
                         <tr>
                              <th scope="row">==</th>
                              <td>
                                   Teste l'égalité de deux valeurs. L'expression $a == $b vaut TRUE si la valeur de $a est
                                   égale
                                   à celle de $b et
                                   FALSE dans le cas contraire </td>
                         </tr>
                         <tr>
                              <th scope="row">!= ou &lt;></th>
                              <td>
                                   Teste l'inégalité de deux valeurs.<br>
                                   L'expression $a != $b vaut TRUE si la valeur de $a est différente de celle de $b et
                                   FALSE
                                   dans le cas contraire.
                              </td>
                         </tr>
                         <tr>
                              <th scope="row">===</th>
                              <td>
                                   Teste l'identité des valeurs et les types de deux expressions.<br>
                                   L'expression $a === $b vaut TRUE si la valeur de $a est égale à celle de $b et que $a et
                                   $b
                                   sont du même type. Elle vaut FALSE dans le cas contraire</td>
                         </tr>
                         <tr>
                              <th scope="row">!==</th>
                              <td>
                                   Teste la non-identité de deux expressions.<br>
                                   L'expression $a !== $b vaut TRUE si la valeur de $a est différente de celle de $b ou si
                                   $a et
                                   $b sont d'un type différent. Dans le cas contraire, elle vaut FALSE </td>
                         </tr>
                         <tr>
                              <th scope="row">&lt;</th>
                              <td>
                                   Teste si le premier opérande est strictement inférieur au second.
                              </td>
                         </tr>
                         <tr>
                              <th scope="row">&lt;=</th>
                              <td>
                                   Teste si le premier opérande est inférieur ou égal au second.
                              </td>
                         </tr>
                         <tr>
                              <th scope="row">></th>
                              <td>
                                   Teste si le premier opérande est strictement supérieur au second.
                              </td>
                         </tr>
                         <tr>
                              <th scope="row">>=</th>
                              <td>
                                   Teste si le premier opérande est supérieur ou égal au second.
                              </td>
                         </tr>
                         <tr>
                              <th scope="row">&lt;=></th>
                              <td>
                                   Avec $a<=>$b, retourne -1, 0 ou 1 respectivement si $a<$b, $a=$b ou $a>$b ($a et $b
                                        peuvent
                                        être des chaînes).
                              </td>
                         </tr>
                         </tbody>
                    </table>
               </div>
               <div class="col-12">
                    <h3 >14 - Les opérateurs logiques </h3>
                    <table class="table table-dark table-hover table-bordered">
                         <thead>
                         <tr>
                              <th scope="col">Opérateurs</th>
                              <th scope="col">Description</th>
                         </tr>
                         </thead>
                         <tbody>
                         <tr>
                              <th scope="row">OR</th>
                              <td>Teste si l'un au moins des opérandes a la valeur TRUE .</td>
                         </tr>
                         <tr>
                              <th scope="row">||</th>
                              <td>Équivaut à l'opérateur OR mais n'a pas la même priorité.</td>
                         </tr>
                         <tr>
                              <th scope="row">XOR</th>
                              <td>Teste si un et un seul des opérandes a la valeur TRUE </td>
                         </tr>
                         <tr>
                              <th scope="row">AND</th>
                              <td>Teste si les deux opérandes valent TRUE en même temps </td>
                         </tr>
                         <tr>
                              <th scope="row">&&</th>
                              <td>Équivaut à l'opérateur AND mais n'a pas la même priorité.</td>
                         </tr>
                         <tr>
                              <th scope="row">!</th>
                              <td>Opérateur unaire de négation, qui inverse la valeur de l'opérande </td>
                         </tr>
                         </tbody>
                    </table>
                    <p class="alert alert-danger">Attention, une erreur classique dans l'écriture des expressions conditionnelles consiste à confondre l'opérateur de comparaison (==) et l'opérateur d'affectation (=). L'usage des parenthèses est recommandé pour éviter les problèmes liés à l'ordre d'évaluation des opérateurs.</p>
               </div>
            </div>
            
        </div>
    </main>
    
 <!-- ceci est mon footer vin include -->
 <?php include ("inc/footer.inc.php" );?>