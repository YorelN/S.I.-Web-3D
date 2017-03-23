<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/styles/main.css">

    <title>Inscription</title>
</head>
<body id="login">
<main>
    <div class="logo"><img src="../assets/img-layout/Pictos/doctorapp.svg" alt=""></div>
    <div class="login">
        <div class="login-screen">
            <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                <div class="login-form">
                    <div class="control-group">
                        <input type="text" placeholder="Nom" name="nom">
                    </div>

                    <div class="control-group">
                        <input type="text" class="login-field" value="" placeholder="Adresse e-mail" name="mail">
                    </div>

                    <div class="control-group">
                        <input type="password" class="login-field" placeholder="Mot de passe" name="password">
                    </div>

                    <div class="control-group">
                        <input type="password" class="login-field" placeholder="Faculté" name="universite">
                    </div>
                    <?php Message::display()?>
                    <input type="submit" class="blue_btn" name="submit">
                </div>
            </form>
        </div>
        <a href="#" class="red_btn">Google +</a>
    </div>

</main>
</body>
</html>
