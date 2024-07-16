<?php

require_once "inc/functions.inc.php";

if (isset($_GET) && isset($_GET['id_film']) && !empty($_GET['id_film'])) {
    
    $idFilm = htmlentities($_GET['id_film']);

    if (is_numeric($idFilm)) {

        $film = showfilmsViaId($idFilm);

        if (!$film) {

            header('location:index.html');

        }
        
    } else {

        header('location:index.html');
        
    }
    
}

require_once "inc/header.inc.php";

?>

<main>
            



</main>



<?php


require_once "inc/footer.inc.php"

?>