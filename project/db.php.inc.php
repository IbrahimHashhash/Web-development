<?php
try {
    $connString = "mysql:host=localhost;dbname=web1221140_taskDB";
    $user = "web1221140_root";
    $pass = "ibrahim2017";
    $pdo = new PDO($connString, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die($e->getMessage());
}
?>
