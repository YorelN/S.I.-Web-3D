<?php
// Inclusion des définitions pour la connexion BDD
include_once 'config.php';

// Tentative de connexion à la base de donnée
try {
    $pdo = new PDO(DBN,DB_USER,DB_PASS);
} catch(PDOException $exception) {
    die($exception->getMessage());
}
$pdo->exec("SET NAMES UTF8");