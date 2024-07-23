<?php

require_once "inc/functions.inc.php";

// debug($_SESSION['user']);

// var_dump(checkUserId(2)) ;

// $profilPaul = checkUserId(2);
$photo = "";
$alt = "";
if ($_SESSION['user']['civility'] == 'h') {

    $photo = "surfing_the_net.png";
    $alt = "avatar homme";
} else {
    $photo = "avatar_f.png";
    $alt = "avatar femme";
}



require_once "inc/header.inc.php";
?>
<main>
    <div class="mx-auto p-2 row flex-column align-items-center">
        <h2 class="text-center mb-5">Bonjour <?= ucfirst($_SESSION['user']['firstName']) ?> </h2>
        <div class="cardParfum">
            <div class="image">
                <img src="<?= RACINE_SITE ?>assets/img/<?= $photo ?>" alt="<?= $alt ?>">
                <div class="details">
                    <div class="center ">
                        <table class="table">
                            <tr>
                                <th scope="row" class="fw-bold">nom</th>
                                <td><?= $_SESSION['user']['firstName'];?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="fw-bold">Prenom</th>
                                <td><?= $_SESSION['user']['lastName'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="fw-bold">Pseudo</th>
                                <td colspan="2"><?= $_SESSION['user']['pseudo'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="fw-bold">email</th>
                                <td colspan="2"><?= $_SESSION['user']['email'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="fw-bold">Tel</th>
                                <td colspan="2"><?= $_SESSION['user']['phone'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="fw-bold">country</th>
                                <td colspan="2"><?= $_SESSION['user']['country'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="fw-bold">city</th>
                                <td colspan="2"><?= $_SESSION['user']['city'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="fw-bold">Adresse</th>
                                <td colspan="2"><?= $_SESSION['user']['address'] ?></td>
                            </tr>
                        </table>
                        <a href="?action=update&id_category=<?= $categorie['id_category'] ?>" class="btn mt-5">Modifier vos informations</a>
                    </div>
                </div>
            </div>
</main>
<?php
require_once "inc/footer.inc.php";
?>