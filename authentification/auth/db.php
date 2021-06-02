<?php 

$monHote = "localhost";
$database = "authentification";
$databaseUser = "authentification";
$userPassword = "coucou";

    $maConnection = mysqli_connect($monHote, $databaseUser, $userPassword, $database);

    if(!$maConnection){
        echo "Pas de connection à la DB";
        die();
        
    }else{
        echo "connexion OK";
    }



?>
