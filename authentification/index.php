
<?php require "app.php"?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
  </div>
</nav>

<div class="container">


    <?php if(!$isLoggedIn && !$modeInscription){ ?>
        <form method="POST">

            <div class="form-group p-5">
                <label for="username">Username</label>

                <input type="text" class="form-control" name="username" required>
            </div>
            <div class="form-group p-5">
            <label for="password">password</label>

                <input type="password" class="form-control" name="password" required>
            </div>        
        
                <div class="form-group p-5">
                 <input type="submit" value="Log in" class="btn btn-success">
                </div>
        
        </form>
        <form method="POST">
         <button class="btn btn-primary" type="submit" name="modeInscription" value="on">Créer un compte</button>
        </form>

<hr>
        <?php }else if ($isLoggedIn){?>
        
        
            <div class="maClasse">
        
        <p> <?php echo $leSecret; ?></p>
    
    
               
        
        
        
        <?php } ?>

        <?php if($modeInscription){ ?>
<form method="post">

<div class="form-group">
    <label for="username">Username</label>

    <input type="text" class="form-control" name="usernameSignUp">
</div>
<div class="form-group">
<label for="password">password</label>

    <input type="password" class="form-control" name="passwordSignUp">
</div>  
<div class="form-group">
<label for="passwordRetype">Re-type password</label>

    <input type="password" class="form-control" name="passwordRetypeSignUp">
</div>      

    <div class="form-group">
     <input type="submit" value="Sign up" class="btn btn-success">
    </div>

</form>
<form method="POST">
<button class="btn btn-primary" name="modeInscription" value="off">Se connecter</button>
</form>
<hr>
<?php } ?>

       



</div>



</body>
</html>