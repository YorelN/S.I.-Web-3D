<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Login</title>
</head>
<body id="login">
<main>
    <div class="logo"><img src="../../assets/img-layout/Pictos/doctorapp.svg" alt=""></div>
    <div class="login">
        <div class="login-screen">
            <div class="app-title">
                <a class="blue_btn" href="<?=ROOT_URL.'users/register'?>">Inscription</a>
            </div>
            <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                <div class="login-form">
                    <div class="control-group">
                        <input type="text" value="" placeholder="E-mail" name="mail">
                    </div>

                    <div class="control-group">
                        <input type="password" class="login-field" value="" placeholder="Mot de passe" name="password" ">
                    </div>
                    <?php Message::display()?>
                    <a href="#" class="forgot_mdp">Mot de passe oublié ?</a>
                    <input type="submit" class="green_btn" name="submit" value="Connexion">
                </div>
            </form>
        </div>
        <a href="#" class="red_btn">Google +</a>
    </div>

</main>
</body>
</html>