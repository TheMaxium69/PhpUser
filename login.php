<?php
include "app.php";

if(isset($_POST['formlogin'])){

    if(!empty($_POST['username']) && !empty($_POST['password'])){

        $usernameForm = $_POST['username'];
        $passwordForm = $_POST['password'];

        $requete = "SELECT * FROM users WHERE username='$usernameForm'";

        $result = mysqli_query($db, $requete);

        if ($result == true)
        {

            foreach ($result as $value) {

                if ($passwordForm == $value['password']) {
                    echo "On revele la phrase". "<hr>";
                    $isLogged = true;

                    $requete2 = "SELECT * FROM secret WHERE id = 1";

                    $result2 = mysqli_query($db, $requete2);

                    foreach ($result2 as $value2) {

                        echo $value2['content'];
                    }


                } else {
                    echo "Il ne s'agit pas du bon mot de passe.";

                }
            }

        } else {

            echo "Aucun compte n'est associé à cette username :" . $_POST['username'] . " .";

        }

    } else {
        echo "Veuillez completer l'ensemble des champs.";
    }
}
?>
