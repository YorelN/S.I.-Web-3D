<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <title>Document</title>
    <style>
        .loading {
            opacity:0;
        }

        .visible {
            opacity:1;
        }
    </style>
</head>
<body>

<?php require "includes/nav_bar.php" ?>

<form action="" name="search" id="search_bar">
    <input type="search">
</form>
<div class="results">
    <ul>

    </ul>
</div>

<section>
    <aside class="search_result">
        <article class="article">
            <h2>Lorem Ipsum</h2>
            <span>Vendredi 13 Avril 2017 - 16:20</span>
            <p>When you’re sick, listen to your mother: go see your doctor and find out what illness you have and how to get better. If you’re…</p>
            <address>Auteur: Ada Lovelace </address>
            <i><img src="../Pictos/star.svg" alt=""></i>
        </article>

        <article class="article">
            <h2>Lorem Ipsum</h2>
            <span>Vendredi 13 Avril 2017 - 16:20</span>
            <p>When you’re sick, listen to your mother: go see your doctor and find out what illness you have and how to get better. If you’re…</p>
            <address>Auteur: Ada Lovelace </address>
            <i><img src="../Pictos/unstar.svg" alt=""></i>
        </article>
    </aside>

    <aside class="tag">
        <h2>#Tags</h2>
        <div class="red_tag">Epaules</div>
        <div class="green_tag">Cardiologie</div>
        <div class="red_tag">Poumons</div>
        <div class="blue_tag">Psycho</div>
        <div class="purple_tag">Neurologie</div>
        <div class="red_tag">ORL</div>
        <div class="green_tag">Pharma</div>
        <div class="red_tag">Epaules</div>
        <div class="green_tag">Cardiologie</div>
        <div class="red_tag">Poumons</div>
        <div class="blue_tag">Psychologie</div>
        <div class="purple_tag">Neurologie</div>
        <div class="red_tag">ORL</div>
        <div class="green_tag">Pharma</div>

    </aside>
</section>

<script type="text/javascript">
    var app = document.querySelector('.search_result');
    var articles = <?=$viewmodel?>;
//    var loading = document.querySelector('.loading');
    var lis = document.querySelectorAll('.tag div');
    render();
    for (let i = 0; i < lis.length; i++) {
        lis[i].addEventListener('click', function() {
            console.log(lis[i].innerHTML);
            loadFile(this.innerHTML, '<?= ROOT_URL."courses/api"?>');
        });
    }

    function loadFile(objet, page)
    {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", page, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
                readData(xhr);
            }
        };
        xhr.send('tag=' + objet);
    }

    function readData(xhr)
    {
        articles = JSON.parse(xhr.response);
        render();
    }

    function render()
    {
        app.innerHTML = "";
        for (let i = 0; i < articles.length; i++) {
            let article = document.createElement('article');
            article.classList.add('article');
            article.innerHTML =
                '<h2>'+articles[i].name+'</h2>' +
                '<p>'+articles[i].content+'</p>' +
                '<i><img src="../Pictos/star.svg" alt=""></i>';
            app.appendChild(article);
        }
    }
</script>
</body>
</html>