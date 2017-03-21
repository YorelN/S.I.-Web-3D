<?php
// Inclusion des définitions pour la connexion BDD
include 'config.php';

// Tentative de connexion à la base de donnée
try {
    $pdo = new PDO('mysql:dbname='.DB_NAME.';host='.DB_HOST,DB_USER,DB_PASS);
} catch(PDOException $exception) {
    die($exception->getMessage());
}
$pdo->exec("SET NAMES UTF8");