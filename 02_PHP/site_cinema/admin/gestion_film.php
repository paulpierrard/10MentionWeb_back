<?php
require_once "../inc/functions.inc.php";


// $categories = allCategories();

// if (isset($_GET) && isset($_GET['action']) && isset($_GET['id_category'])) {

//     $id_category = htmlentities($_GET['id_category']);

//     if ($_GET['action'] == 'delete' && !empty($_GET['id_category'])) {


//         deleteCategorie($id_category);

//         /*
//            htmlentities :convertit tous les caractères applicables en entités HTML. Cela inclut non seulement les caractères spéciaux comme htmlspecialchars, mais aussi d'autres caractères qui ont des entités HTML (comme les caractères accentués) exemple.

//             é devient &eacute;
//             © devient &copy;
//         */
//     }
//     if ($_GET['action'] == 'update' && !empty($_GET['id_category'])) {

//         $category = showCategoryViaId($id_category);
//         // header('location:categories.php');
//     }
// }


// debug($users);


////////////////////////////////////////////fonction pour catégories /////////////////////////////////////////
$info = "";

if (!empty($_POST)) {

    debug($_POST);
    // die();

    // On vérifie si un champ est vide
    $verif = true;
    foreach ($_POST as $key => $value) {

        if (empty(trim($value))) {

            $verif = false;
        }
    }

    // la superglobale $_FILES a un indice "image" qui correspond au "name" de l'input type="file" du formulaire, ainsi qu'un indice "name" qui contient le nom du fichier en cours de téléchargement.

    if (!empty($_FILES['image']['name'])) { //si le nom du fichier en cours de téléchargement n'est pas vide, alors c'est qu'on est en train de télécharger une photo

        $image = 'img/' . $_FILES['image']['name'];  // $image contient le chemin relatif de la photo et sera enregistré en BDD. On utilise ce chemin pour les "src" des balises <img>.

        copy($_FILES['image']['tmp_name'], '../assets/' . $image);

        // on enregistre le fichier image qui se trouve à l'adresse contenue dans $_FILES['image']['tmp_name'] vers la destination qui est le dossier "img" à l'adresse "../asstes/nom_du_fichier.jpg".

        if ($_FILES['image']['error'] != 0 || $_FILES['image']['error'] == 0 || !isset($_FILES['image']['error'])) {
            # code...
        }
    }

    if ($verif == false) {

        $info = alert("Veuillez renseigner tout les champs", "danger");
    } else { // tout les champs sont rmplies je passea la verrification des donnée

        // on récupére les valeurs de nos champs et on les stocke dans des variables
        $titleFilm = trim($_POST['title']);
        $director = trim($_POST['director']);
        $actors = trim($_POST['actors']);
        $genre = $_POST['categories'];
        $duration = trim($_POST['duration']);
        $synopsis = trim($_POST['synopsis']);
        $dateSortie = trim($_POST['date']);
        $price = trim($_POST['price']);
        $stock = trim($_POST['stock']);
        $ageLimit = trim($_POST['ageLimit']);


        $regex_chiffre = '/[0-9]/';
        $regex_acteurs = '/.*\/.*/';



        if (!isset($titleFilm)  || strlen($titleFilm) <= 1) {

            $info = alert("Veuillez mettre un titre", "danger");
        }
        if (!isset($director) || strlen($director) < 2  || preg_match($regex_chiffre, $director)) {

            $info .= alert("Le champ Réalisateur n'est pas valide", "danger");
        }

        if (!isset($actors) ||  strlen($actors) < 3 || preg_match($regex_chiffre, $actors) || !preg_match($regex_acteurs, $actors)) { // valider que l'utilisateur a bien inséré le symbole '/' : chaîne de caractères qui contient au moins un caractère avant et après le symbole /.

            $info .= alert("Le champ acteurs n'est pas valide, il faut séparer les acteurs avec le symbole", "danger");
        }
        if (!isset($genre) ||  showCategoryViaId($genre) == false) {

            $info .= alert("la catégorie n'est pas correcte", "danger");
        }
        if (!isset($duration)) {

            $info .= alert("La durée n'est pas valide", "danger");
        }

        if (!isset($dateSortie)) {

            $info .= alert("La date n'est pas valide", "danger");
        }

        if (!isset($price) || !is_numeric($price)) {

            $info .= alert("Le prix n'est pas valide", "danger");
        }

        if (!isset($synopsis) ||  strlen($synopsis) < 50) {

            $info .= alert("Il faut que le résumé dépasse 50 caractéres", "danger");
        } else if (empty($info)) {

            if(isset($_GET) && isset($_GET['action']) && isset($_GET['id_film']) && !empty($_GET['action']) && !empty($_GET['id_film'])){

                $idFilm = htmlentities($_GET['id_film']);
                updateFilms($titleFilm,$actors,$duration ,$synopsis,$dateSortie ,$price,$stock,$ageLimit);

            }else {

                if (verifFilms($titleFilm,$dateSortie)) {
                    $info = alert("le film existe déja","danger");
                } else {
                    insertFilms($id_category, $title, $director, $actors, $ageLimit, $duration, $synopsis, $date, $image, $price, $stock);
                    header("location:categories.php");
                }
                

            }

        }
    }
}

if (empty($_SESSION['user'])) {
    header('location:' . RACINE_SITE . 'authentification.php');
} else {
    if ($_SESSION['user']['role'] == 'ROLE_USER') {
        header('location:' . RACINE_SITE . 'index.php');
    }
}
if (isset($_GET) && isset($_GET['action']) && isset($_GET['id_film'])) {

    $idFilm = htmlentities($_GET['id_film']);

        if ($_GET['action'] == 'update' && !empty($_GET['id_film'])) {

            if (verifIdFilmExist($idFilm)) {
                $films = showFilmsViaId($idFilm);
            } else {
                header('location:' . RACINE_SITE . 'admin/films.php');
            }
        }
}
require_once "../inc/header.inc.php";
?>

<main>
    <h2 class="text-center fw-bolder mb-5 text-danger">Ajouter un film</h2>

    <?php
    echo $info;
    ?>
    <form action="" method="post" class="back" enctype="multipart/form-data">
        <!-- il faut isérer une image pour chaque film, pour le traitement des images et des fichiers en PHP on utilise la surperglobal $_FILES -->
        <div class="row">
            <div class="col-md-6 mb-5">
                <label for="title">Titre de film</label>
                <input type="text" name="title" id="title" class="form-control" value="<?= $films['title'] ?? '' ?>">

            </div>
            <div class="col-md-6 mb-5">
                <label for="image">Photo</label>
                <br>
                <input type="file" name="image" id="image">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-5">
                <label for="director">Réalisateur</label>
                <input type="text" class="form-control" id="director" name="director" value="<?= $films['director'] ?? '' ?>">
            </div>
            <div class="col-md-6">
                <label for="actors">Acteur(s)</label>
                <input type="text" class="form-control" id="actors" name="actors" value="<?= $films['actors'] ?? '' ?>" placeholder="séparez les noms d'acteurs avec un /">
            </div>
        </div>
        <div class="row">
            <!-- raccouci bs5 select multiple -->
            <div class="mb-3">
                <label for="ageLimit" class="form-label">Àge limite</label>
                <select multiple class="form-select form-select-lg" name="ageLimit" id="ageLimit">
                    <option value="10"<?php if(isset($film['ageLimit']) && $film['ageLimit'] == 10) echo 'selected' ?>>10</option>
                    <option value="13"<?php if(isset($film['ageLimit']) && $film['ageLimit'] == 13) echo 'selected' ?>>13</option>
                    <option value="16"<?php if(isset($film['ageLimit']) && $film['ageLimit'] == 16) echo 'selected' ?>>16</option>
                    <option value="18"<?php if(isset($film['ageLimit']) && $film['ageLimit'] == 18) echo 'selected' ?>>18</option>
                </select>
            </div>
        </div>
        <div class="row">
            <label for="categories">Genre du film</label>

            <!--  Ici c'est les catégories qui sont déjà stockés dans la BDD et qu'on vas les récupérer à partir de cette dernière -->

            <?php
            $categories = allCategories();

            foreach ($categories as $key => $categorie) {
                # code...

            ?>
                <div class="form-check col-sm-12 col-md-4">
                    <input class="form-check-input" type="radio" name="categories" id="<?= html_entity_decode($categorie["name"]) ?>" value="<?= $categorie['id_category'] ?>"<?= isset($film['categoriy_id']) && $film['categoriy_id'] == $categorie['id_category'] ? 'checked': '' ?>>
                    <label class="form-check-label" for="<?= html_entity_decode($categorie["name"]) ?>"><?= ucfirst(html_entity_decode($categorie['name'])); ?></label>
                </div>

            <?php
            }
            ?>
        </div>
        <div class="row">
            <div class="col-md-6 mb-5">
                <label for="duration">Durée du film</label>
                <input type="time" class="form-control" id="duration" name="duration" value="<?= $films['duration'] ?? '' ?>">
            </div>

            <div class="col-md-6 mb-5">

                <label for="date">Date de sortie</label>
                <input type="date" name="date" id="date" class="form-control" value="<?= $films['date'] ?? '' ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-5">
                <label for="price">Prix</label>
                <div class=" input-group">
                    <input type="text" class="form-control" id="price" name="price" aria-label="Euros amount (with dot and two decimal places)" value="<?= $films['price'] ?? '' ?>">
                    <span class="input-group-text">€</span>
                </div>
            </div>

            <div class="col-md-6">
                <label for="stock">Stock</label>
                <input type="number" name="stock" id="stock" class="form-control" min="0" value="<?= $films['stock'] ?? '' ?>"> <!--pas de stock négativ donc je rajoute min="0"-->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label for="synopsis">Synopsis</label>
                <textarea type="text" class="form-control" id="synopsis" name="synopsis" rows="10"><?= $films['synopsis'] ?? '' ?></textarea>
            </div>
        </div>

        <div class="row justify-content-center">
            <button type="submit" class="btn btn-danger p-3 w-25">Ajouter un film</button>
        </div>

    </form>

</main>
<?php

require_once "../inc/footer.inc.php";
?>