<?php

    require_once "inc/functions.inc.php";
    require_once "inc/header.inc.php";

    debug($_SESSION['user']);

    var_dump(checkUserId(2)) ;

    $profilPaul = checkUserId(2);
    


?>



<?php
    require_once "inc/footer.inc.php";
?>