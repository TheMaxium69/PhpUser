<?php 


// on verifie que POST a bien été initialisée aux bons indexs
//on verifie qu'aucune des deux chaines de caractere n'est "" 

//on interroge la base de données : y a-t-il un username correspondant dans la table users ?

//si oui, est-ce que le mot de passe est le mme que celui entré
                //si oui  =   isLoggedIn devient true
  
echo "login fonctionnel";
        //verifier si le formulaire a été envoyé
    if (isset($_POST['username']) && isset($_POST['password'])){
            //est-ce qu'on a bien rempli le formulaire avant de l'envoyer
           $usernameEntre = $_POST['username'];
            $passwordEntre = $_POST['password'];

            if( $usernameEntre != "" && $passwordEntre !=""){
                require_once "auth/db.php";
        
                $maRequete = "SELECT * FROM users WHERE username = '$usernameEntre'";

                $leResultatDeMaRequeteLogin = mysqli_query($maConnection, $maRequete);
                    if(  $leResultatDeMaRequeteLogin->num_rows == 1){


                       foreach( $leResultatDeMaRequeteLogin as $value){
                                                      
                                $vraiMotDePasse =  $value['password'];
                                
                       }

                        if( $passwordEntre == $vraiMotDePasse  ){

                            // echo "bon mot de passe";
                            $isLoggedIn = true;

                        }else{
                            echo "mauvais mot de passe, $usernameEntre";
                        }

                    }else{
                        echo "username inexistant dans la DB";
                    }


            }else{

                echo "Veuillez entrer un username et un password";
            }


    }





?>