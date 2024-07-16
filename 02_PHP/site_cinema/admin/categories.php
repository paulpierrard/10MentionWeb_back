<?php
require_once "../inc/functions.inc.php";


$categories = allCategories();

if (isset($_GET) && isset($_GET['action']) && isset($_GET['id_category']) && !empty($_GET['action']) && !empty($_GET['id_category'])) {

    $id_category = htmlentities($_GET['id_category']);

    if (is_numeric($id_category)) {

        $category = showCategoryViaId($id_category);

        if ($category) {

            if ($_GET['action'] == 'delete') {

                deleteCategorie($id_category);
        
            }
            if ($_GET['action'] != 'update') {

                header('location:categories.php');
                
            }
        }else {

            header('location:categories.php');

        }

    }else{
        header('location:categories.php');
    }

   
}


// debug($users);


////////////////////////////////////////////fonction pour catégories /////////////////////////////////////////
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

        
    } else { // tout les champs sont rmplies je passea la verrification des donnée

        // on récupére les valeurs de nos champs et on les stocke dans des variables
        $name = trim($_POST['name']);
        $description = trim($_POST['description']);




        if (!isset($name) || strlen($name) < 2) { //preg_match — Effectue une recherche de correspondance avec une expression rationnelle standard

            $info = alert("Le champs nom n'est pas valide", "danger");
        }
        if (!isset($description) || strlen($description) < 50) {

            $info .= alert("Le champs prenom n'est pas valide", "danger");


        } else if(empty($info)) {

            $name = strtolower($name);
            $name = htmlentities($name);
            $categorieBdd = showCategorie($name);
            
        


            if ($categorieBdd) {
               

                $info = alert("la categorie existe deja", "danger");


            } else {
                $description = htmlentities($description);
         
                if (isset($_GET) && $_GET['action']=='update' && !empty($_GET['id_category'])) {

                    $id_category = htmlentities($_GET['id_category']);
                
                    update($id_category, $name, $description);

                } else {

                    listeCategories($name, $description);
                }
                
                header('location: categories.php');

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

require_once "../inc/header.inc.php";
?>

<main>

    <div class="row mt-5" style="padding-top: 8rem;">
        <div class="col-sm-12 col-md-6 mt-5">
            <h2 class="text-center fw-bolder mb-5 text-danger">Gestion des catégories</h2>


            <form action="" method="post" class="back">

                <div class="row">
                    <?= $info; ?>
                    <div class="col-md-8 mb-5">
                        <label for="name">Nom de la catégorie</label>

                        <!-- est appelée l'opérateur de coalescence nulle en PHP. Cet opérateur permet de vérifier si une variable est définie et nulle, et de fournir une valeur par défaut si ce n'est pas le cas. -->
                        <input type="text" id="name" name="name" class="form-control" value="<?= $category['name'] ?? '' ?>">

                        <!-- <input type="text" id="name" name="name" class="form-control" value="<? //=isset($category) ? $category['name'] : ''
                                                                                                    ?>"> -->
                    </div>
                    <div class="col-md-12 mb-5">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" class="form-control" rows="10"><?= isset($category) ? $category['description'] : '' ?></textarea>
                    </div>

                </div>
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-danger p-3"><?= isset($category) ? 'modifier une categorie' : 'ajouter une categorie' ?></button>
                </div>
            </form>
        </div>

        <div class="col-sm-12 col-md-6 d-flex flex-column mt-5 pe-3">
            <!-- tableau pour afficher toute les catégories avec des boutons de suppression et de modification -->
            <h2 class="text-center fw-bolder mb-5 text-danger">Liste des catégories</h2>


            <table class="table table-dark table-bordered mt-5 ">
                <thead>
                    <tr>
                        <!-- th*7 -->
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Supprimer</th>
                        <th>Modifier</th>
                    </tr>
                </thead>
                <tbody>




                    <?php

                    foreach ($categories as $key => $categorie) {

                    ?>

                        <tr>
                            <td><?= $categorie['id_category'] ?></td>
                            <td><?= html_entity_decode(ucfirst($categorie['name'])) ?></td>
                            <td><?= substr(html_entity_decode($categorie['description']), 0, 100) . ' ...' ?></td>
                            <td class="text-center"><a href="?action=delete&id_category=<?= $categorie['id_category'] ?>"><i class="bi bi-trash3-fill"></i></a></td>
                            <td class="text-center"><a href="?action=update&id_category=<?= $categorie['id_category'] ?>"><i class="bi bi-pen-fill"></i></a></td>
                        </tr>

                    <?php

                    }

                    ?>
                </tbody>

            </table>





        </div>
    </div>

</main>

<?php

require_once "../inc/footer.inc.php"

?>