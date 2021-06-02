<?php

if(isset($_POST['formSign'])){
    if(!empty($_POST['usernameSignUp']) && !empty($_POST['passwordSignUp']) && !empty($_POST['passwordRetypeSignUp'])){

        $usernameSign = $_POST['usernameSignUp'];
        $passwordSign = $_POST['passwordSignUp'];
        $passwordTypeSign = $_POST['passwordRetypeSignUp'];

        if ($usernameSign != "" && $passwordSign != "" && $passwordTypeSign != ""){

            if ($passwordSign == $passwordTypeSign){

                echo "mdp bon";

                echo "<hr>";

                $requete = "SELECT * FROM users WHERE username='$usernameSign'";

                require_once "auth/db.php";
                $result = mysqli_query($db, $requete);

                $numRows = mysqli_num_rows($result);
                if ($numRows == 0){
                    echo "GOOD";

                    $requete = "INSERT INTO users(username,password) VALUES ('$usernameSign','$passwordSign')";

                    require_once "auth/db.php";
                    $result = mysqli_query($db, $requete);
                    echo "bien envoyé";

                    

                }else{
                    echo "on connais ton user";
                }



            }else{
                echo "tes mp sont pas bon";
            }

        }else{
            echo "le vide n'est pas un truc que je tolère";
        }

    } else {
        echo "Veuillez completer l'ensemble des champs.";
    }
}

?>