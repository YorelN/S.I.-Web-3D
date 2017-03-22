<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/styles/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <title>Accueil</title>
</head>
<body id="home">

<?php if (isset($_SESSION['logged_in'])): ?>
<div>
    <h1>Medecine_App</h1>
    <div class="category">Anatomie</div>
    <div class="category">Rechercher</div>
    <div class="category">Favoris</div>
    <div class="category">Articles</div>
    <div class="category">Organisation</div>
</div>
<?php else: ?>
<div>Connectez vous : <a href="<?=ROOT_URL.'users/login'?>">Ici !</a></div>
<?php endif; ?>
</body>
</html>

