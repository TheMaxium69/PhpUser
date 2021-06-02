<?php



require_once "auth/db.php";

    $maRequeteSecret = "SELECT * FROM secret";

    $resultatRequeteSecret = mysqli_query($maConnection, $maRequeteSecret);

    foreach($resultatRequeteSecret as $value){

        $leSecret = $value['content'];
    }



?>