<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Détails article</title>
    <script type='text/javascript' src='https://ssl-webplayer.unity3d.com/download_webplayer-3.x/3.0/uo/jquery.min.js'></script>
    <script type="text/javascript">
        <!--
        var unityObjectUrl = "http://webplayer.unity3d.com/download_webplayer-3.x/3.0/uo/UnityObject2.js";
        if (document.location.protocol == 'https:')
            unityObjectUrl = unityObjectUrl.replace("http://", "https://ssl-");
        document.write('<script type="text\/javascript" src="' + unityObjectUrl + '"><\/script>');
        -->
    </script>


    <style type="text/css">
        <!--
        body {
            font-family: Helvetica, Verdana, Arial, sans-serif;
            background-color: white;
            color: black;
            text-align: center;
        }
        a:link, a:visited {
            color: #000;
        }
        a:active, a:hover {
            color: #666;
        }
        p.header {
            font-size: small;
        }
        p.header span {
            font-weight: bold;
        }
        p.footer {
            font-size: x-small;
        }
        div.content {
            margin: auto;
            width: 960px;
        }
        div.broken,
        div.missing {
            margin: auto;
            position: relative;
            top: 50%;
            width: 193px;
        }
        div.broken a,
        div.missing a {
            height: 63px;
            position: relative;
            top: -31px;
        }
        div.broken img,
        div.missing img {
            border-width: 0;
        }
        div.broken {
            display: none;
        }
        div#unityPlayer {
            cursor: default;
            height: 600px;
            width: 960px;
        }
    </style>

        <meta name="viewport"
              content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../../assets/styles/main.css">
    <style type="text/css">
        .blue_btn,
        .green_btn {
            display: inline-block;
            width: 49%;
            border-radius: 33px;
        }

    </style>

</head>

<body style="text-align: left">
<nav id="nav_bar">
    <ul>
        <li class="onglet">
            <a href="<?=ROOT_URL . 'courses/anatomie'?>">
                <img src="../../assets/img-layout/Pictos/body.svg" alt="picto anatomie">
                <span>
                    Anatomie
                </span>
            </a>
        </li>

        <li class="onglet">
            <a href="<?=ROOT_URL . 'courses/search'?>">
                <img src="../../assets/img-layout/Pictos/search.svg" alt="picto search">
                <span>
                    Rechercher
                </span>
            </a>
        </li>

        <li class="onglet">
            <a href="<?=ROOT_URL?>">
                <img src="../../assets/img-layout/Pictos/doctorapp.svg" alt="picto accueil">
            </a>
        </li>

        <li class="onglet">
            <a href="<?=ROOT_URL . 'users/favoris'?>">
                <img src="../../assets/img-layout/Pictos/favoris.svg" alt="picto favoris">
                <span>
                    Favoris
                </span>
            </a>
        </li>

        <li class="onglet">
            <a href="<?=ROOT_URL . 'users/organisation'?>">
                <img src="../../assets/img-layout/Pictos/organisaio.svg" alt="picto organisation">
                <span>
                    Organisation
                </span>
            </a>
        </li>
    </ul>
</nav>

<p class="header"><span>Unity Web Player | </span>Semaine intensive</p>
<div class="content">
    <div id="unityPlayer">
        <div class="missing">
            <a href="http://unity3d.com/webplayer/" title="Unity Web Player. Install now!">
                <img alt="Unity Web Player. Install now!" src="http://webplayer.unity3d.com/installation/getunity.png" width="193" height="63" />
            </a>
        </div>
        <div class="broken">
            <a href="http://unity3d.com/webplayer/" title="Unity Web Player. Install now! Restart your browser after install.">
                <img alt="Unity Web Player. Install now! Restart your browser after install." src="http://webplayer.unity3d.com/installation/getunityrestart.png" width="193" height="63" />
            </a>
        </div>
    </div>
    <p class="footer" style="text-align: center">&laquo; created with <a href="http://unity3d.com/unity/" title="Go to unity3d.com">Unity</a> &raquo;</p>
</div>

<div class="add_revision" style="margin-top: 50px;">
    <i><img src="../../assets/img-layout/Pictos/revision.svg" alt="Organisation"></i>
    <a href="<?=ROOT_URL . 'users/organisation'?>">Planifier des révisions</a>
</div>

<section class="details_article">

    <article>
        <div class="<?=$viewmodel['cours']['tag_color']?>_tag" style="display: inline-block;float: none;width: auto;">
            <?=$viewmodel['cours']['tag']?>
        </div>
        <h1><?=$viewmodel['cours']['name']?></h1>

        <p><?=$viewmodel['cours']['full_content']?></p>
        <div class="blue_btn" style="cursor: pointer">Partager</div>
        <div class="green_btn">Ajouter aux favoris</div>
    </article>
</section>

<aside>
    <h2 class="article_h2">Articles liés</h2>
    <?php foreach ($viewmodel['lies'] as $item) :?>
    <article class="article_lies">
        <a href="<?=ROOT_URL.'courses/articles/' . $item['cours_id']?>">
            <h2><?=$item['cours_name']?></h2>
            <p><?=$item['cours_content']?></p>
            <div class="<?=$item['tag_color']?>_tag"><?=$item['tag_name']?></div>
        </a>
    </article>
    <?php endforeach;?>
    <h2 class="article_h2">Autres articles</h2>
    <?php foreach ($viewmodel['autres'] as $item) :?>
        <article class="article_lies">
            <a href="<?=ROOT_URL.'courses/articles/' . $item['cours_id']?>">
                <h2><?=$item['cours_name']?></h2>
                <p><?=$item['cours_content']?></p>
                <div class="<?=$item['tag_color']?>_tag"><?=$item['tag_name']?></div>
            </a>
        </article>
    <?php endforeach;?>


</aside>

<script type="text/javascript">
    <!--
    var config = {
        width: 960,
        height: 600,
        params: { enableDebugging:"0" }

    };
    var u = new UnityObject2(config);

    jQuery(function() {

        var $missingScreen = jQuery("#unityPlayer").find(".missing");
        var $brokenScreen = jQuery("#unityPlayer").find(".broken");
        $missingScreen.hide();
        $brokenScreen.hide();

        u.observeProgress(function (progress) {
            switch(progress.pluginStatus) {
                case "broken":
                    $brokenScreen.find("a").click(function (e) {
                        e.stopPropagation();
                        e.preventDefault();
                        u.installPlugin();
                        return false;
                    });
                    $brokenScreen.show();
                    break;
                case "missing":
                    $missingScreen.find("a").click(function (e) {
                        e.stopPropagation();
                        e.preventDefault();
                        u.installPlugin();
                        return false;
                    });
                    $missingScreen.show();
                    break;
                case "installed":
                    $missingScreen.remove();
                    break;
                case "first":
                    break;
            }
        });
        u.initPlugin(jQuery("#unityPlayer")[0], "../../EssaiPlugin/Hippocrapp.unity3d");
    });
</script>
</body>
</html>



