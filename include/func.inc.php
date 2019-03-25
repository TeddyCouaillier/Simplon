<?php 
    require './include/config.inc.php';

    try {
        $pdo = new PDO("mysql:host=$db_host;dbname=$db_database;charset=utf8mb4;", $db_username, $db_password);
    } catch (PDOException $e) {
        echo "Une erreur est survenue ! <br>Message : ". $e->getMessage()."<br>Code erreur N°".$e->getCode();
        die();
    }

    $result = $pdo->prepare("SELECT * FROM utilisateurs");
    $result->execute();

    $users = json_encode($result->fetchAll(PDO::FETCH_ASSOC));


    $result->closeCursor();

    $result = $pdo->prepare("SELECT * FROM promotion");
    $result->execute();

    $promos = json_encode($result->fetchAll(PDO::FETCH_ASSOC));

    $result->closeCursor();
?>