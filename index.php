<?php
session_start();

require 'config/db.php';

require 'classes/Boostrap.php';
require 'classes/Controller.php';
require 'classes/Model.php';
require 'classes/Message.php';

require "controllers/home.php";
require "controllers/users.php";
require "controllers/courses.php";

require "model/home.php";
require "model/user.php";
require "model/course.php";

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();


if ($controller) {
    $controller->executeAction();
}

