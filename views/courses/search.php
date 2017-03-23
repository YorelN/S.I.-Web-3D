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


        #search_bar {
            position: relative;
        }

        .tags {
            position: absolute;
            bottom: 3.5px;
            right: 5%;
            width: 100%;
        }

        .tags div,
        .tag div {
            cursor: pointer;
        }

        .tags div {
            float: right;
            padding: .5% 1.5%;
            margin: 1% .5%;
        }

        .search_result article i {
            cursor: pointer;
        }

        .search_result article div {
            display: inline-block;
            float: none;
        }

    </style>
</head>
<body>

<?php require "includes/nav_bar.php" ?>

<div id="search_bar">
    <input type="search">
    <div class="tags"></div>
</div>
<div class="results">
    <ul>

    </ul>
</div>

<section>
    <aside class="search_result">
<!--        <article class="article">-->
<!--            <h2>Lorem Ipsum</h2>-->
<!--            <span>Vendredi 13 Avril 2017 - 16:20</span>-->
<!--            <p>When you’re sick, listen to your mother: go see your doctor and find out what illness you have and how to get better. If you’re…</p>-->
<!--            <address>Auteur: Ada Lovelace </address>-->
<!--            <i><img src="../Pictos/star.svg" alt=""></i>-->
<!--        </article>-->
<!---->
<!--        <article class="article">-->
<!--            <h2>Lorem Ipsum</h2>-->
<!--            <span>Vendredi 13 Avril 2017 - 16:20</span>-->
<!--            <p>When you’re sick, listen to your mother: go see your doctor and find out what illness you have and how to get better. If you’re…</p>-->
<!--            <address>Auteur: Ada Lovelace </address>-->
<!--            <i><img src="../Pictos/unstar.svg" alt=""></i>-->
<!--        </article>-->
    </aside>

    <aside class="tag">
        <h2>#Tags</h2>


    </aside>
</section>

<script type="text/javascript">
    var app = document.querySelector('.search_result');
    var articles = [];
    var tags = document.querySelector('.tags');
    var new_articles = '';
    var aside = document.querySelector('.tag');
    var lis = [];
    var tags_to_show = <?=$viewmodel?>;
    render_tags();


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

    function render()
    {
        for (let i = 0; i < articles.length; i++) {
            let article = document.createElement('article');
            article.classList.add('article');
            article.innerHTML =
                '<a href="<?=ROOT_URL?>courses/articles/'+ articles[i].id +'">' +
                    '<h2>'+articles[i].name+'</h2>' + '</a>' +
                    '<p>'+articles[i].content+'</p>' +
                    '<i><img src="../assets/img-layout/Pictos/unstar.svg" alt=""></i>' +
                    '<div class="'+articles[i].tag_color+'_tag">' + articles[i].tag +'</div>'
                ;
            article.classList.add(new_articles);
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

    function render_tags()
    {
        for (let i = 0; i < tags_to_show.length; i++) {
            let div_tag = document.createElement('div');
            div_tag.innerHTML = tags_to_show[i].name;
            div_tag.className = tags_to_show[i].tag_color + "_tag";
            aside.appendChild(div_tag);
        }
        lis = document.querySelectorAll('.tag div');
        for (let i = 0; i < lis.length; i++) {
            lis[i].addEventListener('click', function() {
                new_articles = this.innerHTML;
                loadFile(this.innerHTML, '<?= ROOT_URL."courses/api"?>');
                let div = document.createElement('div');
                div.classList.add(this.className);
                div.innerHTML= this.innerHTML;
                tags.appendChild(div);
                div.addEventListener('click', function() {
                    var toRemove = document.querySelectorAll('.' + this.innerHTML);
                    this.remove();
                    for (let j = 0; j < toRemove.length; j++) {
                        app.removeChild(toRemove[j]);
                    }
                });
            });
        }
    }
</script>
</body>
</html>
