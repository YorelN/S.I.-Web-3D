

<div class="app"></div>

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
