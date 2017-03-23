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

<?php if (isset($_SESSION['logged_in'])): ?>
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


<section class="app">
</section>

    <script type="text/javascript">
        var app = document.querySelector('.app');
        var articles = <?=$viewmodel?>;
        render();

        function render()
        {
            for (let i = 0; i < articles.length; i++) {
                let article = document.createElement('article');
                article.classList.add('article');
                article.innerHTML =
                    '<a href="<?=ROOT_URL?>courses/articles/'+ articles[i].id +'">' +
                    '<h2>'+articles[i].name+'</h2>' + '</a>' +
                    '<p>'+articles[i].content+'</p>' +
                    '<i><img src="assets/img-layout/Pictos/unstar.svg" alt=""></i>' +
                    '<div class="' + articles[i].tag_color + '_tag">'+ articles[i].tag +'</div>'
                ;
                app.appendChild(article);
                article.querySelector("i").addEventListener('click', function() {
                    if (this.querySelector('img').src == 'http://localhost:8888/medical/assets/img-layout/Pictos/unstar.svg') {
                        this.querySelector('img').src = 'http://localhost:8888/medical/assets/img-layout/Pictos/star.svg';
                    } else {
                        this.querySelector('img').src = 'http://localhost:8888/medical/assets/img-layout/Pictos/unstar.svg';
                    }

                    loadF(articles[i].id,<?=$_SESSION['id']?>,"<?=ROOT_URL.'courses/addfavoris'?>");
                });
            }
        }

        function loadF(objet,objet2, page)
        {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", page, true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
                    console.log(xhr.response);
                }
            };
            xhr.send('cours=' + objet +"&user="+objet2);
        }

    </script>
<?php else: ?>
        <section id="a_propos">
            <div><img src="assets/img-layout/Pictos/doctorapp.svg" alt=""></div>
            <h4>Doctor'App, la solution #1 pour les futurs professionnels de la santé</h4>
            <p>Parcourez de nombreux cours accompagné d'une modélisation en 3D inédite pour une meilleur compréhension du corp humain</p>
            <div class="link">
                <a href="<?=ROOT_URL.'users/register'?>" class="blue_btn">Inscription</a>
                <a href="<?=ROOT_URL.'users/login'?>" class="green_btn">Connexion</a>
            </div>
        </section>
<?php  endif;?>
</body>

</html>
