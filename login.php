<?php

if(isset($_POST['formlogin'])){
    if(!empty($_POST['username']) && !empty($_POST['password'])){

        $usernameForm = $_POST['username'];
        $passwordForm = $_POST['password'];

        $requete = "SELECT * FROM users WHERE username='$usernameForm'";

        require_once "auth/db.php";
        $result = mysqli_query($db, $requete);

        $numRows = mysqli_num_rows($result);

        if ($numRows == 1) {
            foreach ($result as $value) {
                if ($passwordForm == $value['password']) {
                    echo "On revele la phrase" . "<hr>";
                    $isLogged = true;
                } else {
                    echo "Il ne s'agit pas du bon mot de passe.";

                }
            }
        } else {
            echo "Aucun compte n'est associé à cette username :" . $usernameForm . " .";
        }

    } else {
        echo "Veuillez completer l'ensemble des champs.";
    }
}
?>
