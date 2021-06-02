<?php include "app.php";?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Php User</title>
    <link href="" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>


<?php if (!$isLoggedIn && !$modeInscription) {
    ?>
<div class="container">
    <form method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <input type="submit" name="formlogin" value="Log in" class="btn btn-danger">
        </div>
    </form>

    <form method="POST">
        <button class="btn btn-outline-danger" type="submit" name="modeInscription" value="on">Créer un compte</button>
    </form>
    <hr>
    <?php }else if ($isLoggedIn){?>


    <div class="maClasse">

        <p> <?php echo $leSecret; ?></p>






        <?php } ?>

    <?php if ($modeInscription) {?>
    <form method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="usernameSignUp">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="passwordSignUp">
        </div>
        <div class="form-group">
            <label for="">Re-type password</label>
            <input type="password" class="form-control" name="passwordRetypeSignUp">
        </div>
        <div class="form-group">

            <input type="hidden" name="modeInscription" value="on"></input>
            <input type="submit" name="formSign" value="Sign Up" class="btn btn-danger">
        </div>
    </form>

        <form method="POST">
            <button class="btn btn-outline-danger" name="modeInscription" value="off">Se connecter</button>
        </form>
    <hr>
    <?php }?>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script></body>
</html>