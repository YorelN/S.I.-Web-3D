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