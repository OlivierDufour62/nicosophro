<?php

$user = 'root';
$password = 'root';
try {
    $dbh = new PDO('mysql:host=localhost;dbname=nicosophro_bdd', $user, $password);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}