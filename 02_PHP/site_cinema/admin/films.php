<?php
require_once "../inc/functions.inc.php";
$films = allFilmes();
// gestion de l'accesibilité des pages 
if (empty($_SESSION['user'])) {

    header('location:' . RACINE_SITE . 'authentification.php');
} else {

    if ($_SESSION['user']['role']=='ROLE_USER') {
        header('location:index.php');
    }
}

require_once "../inc/header.inc.php";
?>
<main>

    <div class="d-flex flex-column m-auto mt-5 table-responsive">
        <!-- tableau pour afficher tout les utilisateurs avec des boutons de suppression et de modification -->
        <h2 class="text-center fw-bolder mb-5 text-danger">Liste des utilisateurs</h2>
        <table class="table  table-dark table-bordered mt-5">
            <thead>
                <tr>
                    <!--   th*7   -->
                    <th>id film</th>
                    <th>categorie</th>
                    <th>titre</th>
                    <th>director</th>
                    <th>Acteur</th>
                    <th>limit d'age</th>
                    <th>duree du film</th>
                    <th>Synopsis</th>
                    <th>date de sortie du film</th>
                    <th>image</th>
                    <th>prix</th>
                    <th>stock</th>
                    <th>Supprimer</th>
                    <th>Modifier Le rôle</th>

                </tr>
            </thead>
            <tbody>

                <?php

                foreach ($films as $key => $film) {

                ?>

                    <tr>
                        <td><?= $film['id_film'] ?></td>
                        <td><?= $film['category_id'] ?></td>
                        <td><?= $film['title'] ?></td>
                        <td><?= $film['director'] ?></td>
                        <td><?= $film['actors'] ?></td>
                        <td><?= $film['ageLimit'] ?></td>
                        <td><?= $film['duration'] ?></td>
                        <td><?= $film['synopsis'] ?></td>
                        <td><?= $film['date'] ?></td>
                        <td><img src="<?= RACINE_SITE ?>assets/<?= $film['image'] ?>" alt=""></td>
                        <td><?= $film['price'] ?></td>
                        <td><?= $film['stock'] ?></td>
                        <td class="text-center"><a href="?action=delete&id_film=<?= $film['id_film'] ?>"><i class="bi bi-trash3"></i></a></td>
                        <td class="text-center"><a href="gestion_film.php?action=update&id_film=<?= $film['id_film'] ?>"><i class="bi bi-pen-fill"></i></a> </td>

                    </tr>

                <?php

                }

                ?>

            </tbody>
        </table>

    </div>

</main>

<?php

require_once "../inc/footer.inc.php";
?>