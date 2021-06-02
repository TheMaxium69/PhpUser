<?php

require_once "auth/db.php";

$requete2 = "SELECT * FROM secret WHERE id = 1";

$result2 = mysqli_query($db, $requete2);

foreach ($result2 as $value2) {

    echo $value2['content'];

}

?>