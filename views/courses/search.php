<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

<h2>#TAGS</h2>
<div class="loading">loading</div>
<ul>
    <li>cardiologie</li>
    <li>psychologie</li>
</ul>

<div class="app">
</div>

<script type="text/javascript">
    var app = document.querySelector('.app');
    var articles = <?=$viewmodel?>;
    var loading = document.querySelector('.loading');
    var lis = document.querySelectorAll('ul li');
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
            let article = document.createElement('div');
            article.innerHTML = '<div>' +
                '<h2>'+articles[i].name+'</h2>' +
                '<p>'+articles[i].content+'</p>' +
                '</div>';
            app.appendChild(article);
        }
    }
</script>
</body>
</html>