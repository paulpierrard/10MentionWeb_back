<?php

require_once "../inc/functions.inc.php";


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

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Backoffice</a>

        <!-- <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a> -->
        <ul class="dropdown-menu">
            <li><a class="dropdown-item text-dark fs-4" href="<?= RACINE_SITE ?>admin/categories.php">Catégories</a></li>
            <li><a class="dropdown-item text-dark fs-4" href="<?= RACINE_SITE ?>admin/films.php">Films</a></li>
            <li><a class="dropdown-item text-dark fs-4" href="<?= RACINE_SITE ?>admin/users.php">utilisateurs</a></li>
        </ul>

    </li>

</main>

<?php

require_once "../inc/footer.inc.php"

?>