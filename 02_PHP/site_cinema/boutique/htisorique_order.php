<?php
require_once "../inc/functions.inc.php";


if (empty($_SESSION['user'])) {

    header("location:" . RACINE_SITE . "authentification.php");
}

require_once "../inc/header.inc.php";
?>


<main>
    
</main>



<?php

require_once "../inc/footer.inc.php";
?>