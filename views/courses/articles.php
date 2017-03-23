<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
            border-width: 0px;
        }
        div.broken {
            display: none;
        }
        div#unityPlayer {
            cursor: default;
            height: 600px;
            width: 960px;
        }
        -->
    </style>

        <meta name="viewport"
              content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../../assets/styles/main.css">

</head>

<body>
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
    <p class="footer">&laquo; created with <a href="http://unity3d.com/unity/" title="Go to unity3d.com">Unity</a> &raquo;</p>
</div>

<div class="add_revision">
    <i><img src="../../assets/img-layout/Pictos/revision.svg" alt="Organisation"></i>
    <a href="#">Planifier des révisions</a>
</div>

<section class="details_article">

    <article>

        <h1><?=$viewmodel['name']?></h1>

        <p><?=$viewmodel['full_content']?></p>

    </article>
</section>

<aside>
    <article class="article_lies">
        <h2>Lorem Ipsum</h2>
        <span>Vendredi 13 Avril 2017 - 16:20</span>
        <p>When you’re sick, listen to your mother: go see your doctor and find out what illness you have and how to get better. If you’re…</p>
        <address>Auteur: Ada Lovelace </address>
        <i><img src="../assets/img-layout/Pictos/star.svg" alt=""></i>
    </article>

    <article class="article_lies">
        <h2>Lorem Ipsum</h2>
        <span>Vendredi 13 Avril 2017 - 16:20</span>
        <p>When you’re sick, listen to your mother: go see your doctor and find out what illness you have and how to get better. If you’re…</p>
        <address>Auteur: Ada Lovelace </address>
        <i><img src="../assets/img-layout/Pictos/star.svg" alt=""></i>
    </article>


</aside>

</body>
</html>



