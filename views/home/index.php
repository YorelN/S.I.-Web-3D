<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/styles/main.css">

    <title>Articles</title>
</head>
<body id="login">
<nav id="nav_bar">
    <ul>
        <li class="onglet">
            <a href="<?=ROOT_URL . 'courses/anatomie'?>">
                <img src="assets/img-layout/Pictos/body.svg" alt="picto anatomie">
                <span>
                    Anatomie
                </span>
            </a>
        </li>

        <li class="onglet">
            <a href="<?=ROOT_URL . 'courses/search'?>">
                <img src="assets/img-layout/Pictos/search.svg" alt="picto search">
                <span>
                    Rechercher
                </span>
            </a>
        </li>

        <li class="onglet">
            <a href="<?=ROOT_URL?>">
                <img src="assets/img-layout/Pictos/doctorapp.svg" alt="picto accueil">
            </a>
        </li>

        <li class="onglet">
            <a href="<?=ROOT_URL . 'users/favoris'?>">
                <img src="assets/img-layout/Pictos/favoris.svg" alt="picto favoris">
                <span>
                    Favoris
                </span>
            </a>
        </li>

        <li class="onglet">
            <a href="<?=ROOT_URL . 'users/organisation'?>">
                <img src="assets/img-layout/Pictos/organisaio.svg" alt="picto organisation">
                <span>
                    Organisation
                </span>
            </a>
        </li>
    </ul>
</nav>

<nav class="clearfix">
    <a href="#" class="all_articles">
        <p class="active">Articles récents</p>
    </a>
    <a href="#" class="all_articles">
        <p class="notActive">Articles conseillé</p>
    </a>
</nav>


<section>
  <?php foreach ($viewmodel as $item): ?>
    <article class="article">
        <h2><?=$item['name']?></h2>
        <span>Vendredi 13 Avril 2017 - 16:20</span>
        <p><?=$item['content']?></p>
        <address>Auteur: Ada Lovelace </address>
        <i><img src="assets/img-layout/Pictos/star.svg" alt=""></i>
    </article>

  <?php endforeach; ?>


    <!-- <article class="article">
        <h2>Lorem Ipsum</h2>
        <span>Vendredi 13 Avril 2017 - 16:20</span>
        <p>When you’re sick, listen to your mother: go see your doctor and find out what illness you have and how to get better. If you’re…</p>
        <address>Auteur: Ada Lovelace </address>
        <i><img src="assets/img-layout/Pictos/unstar.svg" alt=""></i>
    </article>

    <article class="article">
        <h2>Lorem Ipsum</h2>
        <span>Vendredi 13 Avril 2017 - 16:20</span>
        <p>When you’re sick, listen to your mother: go see your doctor and find out what illness you have and how to get better. If you’re…</p>
        <address>Auteur: Ada Lovelace </address>
        <i><img src="assets/img-layout/Pictos/star.svg" alt=""></i>
    </article>

    <article class="article">
        <h2>Lorem Ipsum</h2>
        <span>Vendredi 13 Avril 2017 - 16:20</span>
        <p>When you’re sick, listen to your mother: go see your doctor and find out what illness you have and how to get better. If you’re…</p>
        <address>Auteur: Ada Lovelace </address>
        <i><img src="assets/img-layout/Pictos/unstar.svg" alt=""></i>
    </article>

    <article class="article">
        <h2>Lorem Ipsum</h2>
        <span>Vendredi 13 Avril 2017 - 16:20</span>
        <p>When you’re sick, listen to your mother: go see your doctor and find out what illness you have and how to get better. If you’re…</p>
        <address>Auteur: Ada Lovelace </address>
        <i><img src="assets/img-layout/Pictos/unstar.svg" alt=""></i>
    </article>

    <article class="article">
        <h2>Lorem Ipsum</h2>
        <span>Vendredi 13 Avril 2017 - 16:20</span>
        <p>When you’re sick, listen to your mother: go see your doctor and find out what illness you have and how to get better. If you’re…</p>
        <address>Auteur: Ada Lovelace </address>
        <i><img src="assets/img-layout/Pictos/unstar.svg" alt=""></i>
    </article>
</section> -->


</body>
</html>
