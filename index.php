<?php

require 'config/db.php';

require 'classes/Boostrap.php';
require 'classes/Controller.php';
require 'classes/Model.php';

require "controllers/home.php";
require "controllers/users.php";

require "model/home.php";
require "model/user.php";

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();


if ($controller) {
    $controller->executeAction();
}
//$sql = "SELECT `id`, `name`, `contenu` FROM `cours` WHERE 1";
//$stmt = $pdo->prepare($sql);
//$stmt->execute();
//while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
<!--<div>-->
<!--    <h2>--><?//=$row['name']?><!--</h2>-->
<!--</div>-->
<?php //endwhile; ?>
