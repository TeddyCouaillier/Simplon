<?php 
    require './include/config.inc.php';

    try {
        $pdo = new PDO("mysql:host=$db_host;dbname=$db_database;", $db_username, $db_password);
    } catch (PDOException $e) {
        echo "Une erreur est survenue ! <br>Message : ". $e->getMessage()."<br>Code erreur N°".$e->getCode();
        die();
    }

    //$result = $pdo->query("SELECT * FROM utilisateurs");
    //$result->setFetchMode(PDO::FETCH_OBJ);
    //while( $ligne = $result->fetch())
    //{
        //echo json_encode($ligne);
    //}

    $result = $pdo->prepare("SELECT * FROM utilisateurs");
    $result->execute();

    $users = json_encode($result->fetchAll(PDO::FETCH_ASSOC));

    //echo $users . "<br>";

    $decoded_users = json_decode($users);
    //echo $decoded_users[0]->password;

    $result->closeCursor();

?>