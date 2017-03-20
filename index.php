<?php

require 'classes/Boostrap.php';

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();