<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/styles/main.css">

    <title>Favoris</title>
</head>
<body id="login">
<?php require "includes/nav_bar.php" ?>

<section class="app">
<!--    <article class="article">-->
<!--        <h2>Lorem Ipsum</h2>-->
<!--        <span>Vendredi 13 Avril 2017 - 16:20</span>-->
<!--        <p>When you’re sick, listen to your mother: go see your doctor and find out what illness you have and how to get better. If you’re…</p>-->
<!--        <address>Auteur: Ada Lovelace </address>-->
<!--        <i><img src="../assets/img-layout/Pictos/star.svg" alt=""></i>-->
<!--    </article>-->
<!---->
<!--    <article class="article">-->
<!--        <h2>Lorem Ipsum</h2>-->
<!--        <span>Vendredi 13 Avril 2017 - 16:20</span>-->
<!--        <p>When you’re sick, listen to your mother: go see your doctor and find out what illness you have and how to get better. If you’re…</p>-->
<!--        <address>Auteur: Ada Lovelace </address>-->
<!--        <i><img src="../assets/img-layout/Pictos/star.svg" alt=""></i>-->
<!--    </article>-->
<!---->
<!--    <article class="article">-->
<!--        <h2>Lorem Ipsum</h2>-->
<!--        <span>Vendredi 13 Avril 2017 - 16:20</span>-->
<!--        <p>When you’re sick, listen to your mother: go see your doctor and find out what illness you have and how to get better. If you’re…</p>-->
<!--        <address>Auteur: Ada Lovelace </address>-->
<!--        <i><img src="../assets/img-layout/Pictos/star.svg" alt=""></i>-->
<!--    </article>-->
<!---->
<!--    <article class="article">-->
<!--        <h2>Lorem Ipsum</h2>-->
<!--        <span>Vendredi 13 Avril 2017 - 16:20</span>-->
<!--        <p>When you’re sick, listen to your mother: go see your doctor and find out what illness you have and how to get better. If you’re…</p>-->
<!--        <address>Auteur: Ada Lovelace </address>-->
<!--        <i><img src="../assets/img-layout/Pictos/star.svg" alt=""></i>-->
<!--    </article>-->
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
                '<a href="<?=ROOT_URL?>courses/articles/'+ articles[i].cours_id +'">' +
                '<h2>'+articles[i].cours_name+'</h2>' + '</a>' +
                '<p>'+articles[i].cours_content+'</p>' +
                '<i><img src="../assets/img-layout/Pictos/star.svg" alt=""></i>'
            ;
            app.appendChild(article);
            article.querySelector("i").addEventListener('click', function() {
                loadF(articles[i].cours_id,<?=$_SESSION['id']?>,"<?=ROOT_URL.'courses/addfavoris'?>");
                article.remove();
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

    function readData(xhr)
    {
        articles = JSON.parse(xhr.response);
        render();
    }
</script>
</body>
</html>
