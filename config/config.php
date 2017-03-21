<?php

// Définition des paramètres qui vont être utilisé pour la connection à la BDD.

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "root");
define("DB_NAME", "medical");

define("DBN", 'mysql:dbname='.DB_NAME.";host=".DB_HOST);
// Définition des PATH principaux

define("ROOT_PATH", "/medical/");
define("ROOT_URL", "http://localhost:8888/medical/");