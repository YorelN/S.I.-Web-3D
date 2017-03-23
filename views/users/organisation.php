<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis:100,300,400,500,700" rel="stylesheet">

    <title>Organisation</title>
</head>
<body>

<?php require "includes/nav_bar.php"?>

<section id="calendar">
    <div id="wrapOverall">


        <div id="calendar">
            <table>
                <div id="month">
                    <th class="month" colspan="7">SEPTEMBER</th>
                </div> <!-- MONTH -->

                <div id="weeks">
                    <tr class="weeks">
                        <td>SUN</td>
                        <td>MON</td>
                        <td>TUE</td>
                        <td>WED</td>
                        <td>THU</td>
                        <td>FRI</td>
                        <td>SAT</td>
                    </tr>
                </div> <!-- WEEKS -->

                <div id="days">
                    <tr class="week1">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="days">1</td>
                        <td class="days">2</td>
                    </tr>

                    <tr class="week2">
                        <td class="days">3</td>
                        <td class="days">4</td>
                        <td class="days">5</td>
                        <td class="days">6</td>
                        <td class="days">7</td>
                        <td class="days">8</td>
                        <td class="days">9</td>
                    </tr>

                    <tr class="week3">
                        <td class="days">10</td>
                        <td class="days">11</td>
                        <td class="days">12</td>
                        <td class="days">13</td>
                        <td class="days">14</td>
                        <td class="days">15</td>
                        <td class="days">16</td>
                    </tr>

                    <tr class="week4">
                        <td class="days">17</td>
                        <td class="days">18</td>
                        <td class="days">19</td>
                        <td class="days">20</td>
                        <td class="days">21</td>
                        <td class="days">22</td>
                        <td class="days">23</td>
                    </tr>

                    <tr class="week5">
                        <td class="days">24</td>
                        <td class="days">25</td>
                        <td class="days">26</td>
                        <td class="days">27</td>
                        <td class="days">28</td>
                        <td class="days">29</td>
                        <td class="days">30</td>
                    </tr>
                </div> <!-- DAYS -->
            </table>
        </div> <!-- CALENDAR -->

</section>


<section id="historique">

    <h1>Historique</h1>

    <?php foreach ($viewmodel as $item): ?>
    <article class="article">
        <h2><?=$item['cours_name']?></h2>
        <p><?=$item['cours_content']?></p>
        <div class="<?=$item['tag_color']?>_tag"><?=$item['tag_name']?></div>
    </article>

    <?php endforeach; ?>

</section>

</body>
</html> 