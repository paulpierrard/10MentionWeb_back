<?php
require_once "../inc/functions.inc.php";


$categories = allCategories();

if (isset($_GET) && isset($_GET['action']) && isset($_GET['id_liCat'])) {

    if ($_GET['action'] == 'delete' && !empty($_GET['id_liCat'])) {

        $id_liCat = htmlentities($_GET['id_liCat']);
        deleteCategorie($id_liCat);
        header('location:categories.php');





        /*
           htmlentities :convertit tous les caractères applicables en entités HTML. Cela inclut non seulement les caractères spéciaux comme htmlspecialchars, mais aussi d'autres caractères qui ont des entités HTML (comme les caractères accentués) exemple.

            é devient &eacute;
            © devient &copy;
        */
    }
}


// debug($users);


////////////////////////////////////////////fonction pour catégories /////////////////////////////////////////
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

        // on récupére les valeurs de nos champs et on les stocke dans des variables
        $name = $_POST['name'];
        $description = $_POST['description'];





        if (!isset($name) || strlen($name) < 2 || strlen($name) > 15) { //preg_match — Effectue une recherche de correspondance avec une expression rationnelle standard

            $info = alert("Le champs nom n'est pas valide", "danger");
        }
        if (!isset($description) || strlen($description) < 2 || strlen($description) > 100) {

            $info .= alert("Le champs prenom n'est pas valide", "danger");
        }

        listeCategories($name,  $description);
        header('location:categories.php');
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

    <div class="row col-12">
        <div class="col-lg-6">
            <h2 class="text-center fw-bolder mb-5 text-danger">Gestion des catégories</h2>
            <form action="" method="post" class="">
                <div class="p-5 m-5 rounded bg-dark text-danger ">
                    <div class="col-md-11 m-5 w-50">
                        <label for="name" class="form-label mb-3">Nom de la catégories</label>
                        <input type="text" class="form-control fs-5" id="name" name="name">
                    </div>
                    <div class="col-md-11 m-5">
                        <label for="description" class="form-label mb-3">Description</label>
                        <textarea class="form-control" rows="10" id="description" name="description"></textarea>
                    </div>
                    <div class="row mt-5">
                        <button class="w-25 m-auto btn btn-danger btn-lg fs-5" type="submit">Ajouter une catégorie</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-6">
            <div class="d-flex flex-column m-auto mt-5 table-responsive">
                <!-- tableau pour afficher tout les utilisateurs avec des boutons de suppression et de modification -->
                <h2 class="text-center fw-bolder mb-5 text-danger">Liste des catégories</h2>
                <table class="table  table-dark table-bordered mt-5">
                    <thead>
                        <tr>
                            <!--   th*7   -->
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Supprimer</th>
                            <th>Modifier Le rôle</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        foreach ($categories as $key => $categorie) {

                        ?>

                            <tr>
                                <td><?= $categorie['id_category'] ?></td>
                                <td><?= $categorie['name'] ?></td>
                                <td><?= $categorie['description'] ?></td>
                                <td class="text-center"><a href="?action=delete&id_liCat=<?= $categorie['id_category'] ?>"><i class="bi bi-trash3"></i></a></td>
                                <td class="text-center"><a href=""><i class="bi bi-pen-fill"></i></a></td>
                            </tr>

                        <?php

                        }

                        ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

</main>

<?php

require_once "../inc/footer.inc.php"

?>